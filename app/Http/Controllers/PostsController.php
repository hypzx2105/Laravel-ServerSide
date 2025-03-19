<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the blog posts (tourism places).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new tourism place post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created tourism place post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // Generate unique name for the image
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // Store image in `public/images`
        $request->image->move(public_path('images'), $newImageName);

        // Create the post
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName
        ]);

        return redirect('/blog')->with('message', 'Tourism place added successfully!');
    }

    /**
     * Display the details of a specific tourism place.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing a tourism place post.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.edit', compact('post'));
    }

    /**
     * Update an existing tourism place post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:5048'
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $post->image_path = $newImageName;
        }

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->save();

        return redirect('/blog')->with('message', 'Tourism place updated successfully!');
    }

    /**
     * Remove a tourism place post from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        // Delete the image file
        if ($post->image_path) {
            $imagePath = public_path('images/') . $post->image_path;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $post->delete();

        return redirect('/blog')->with('message', 'Tourism place deleted successfully!');
    }
}
