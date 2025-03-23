<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display all tourism posts.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(6); // 6 per page
        return view('blog.index', compact('posts'));
    }

    /**
     * Show form to create a new post.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a new tourism post.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|max:255',
            'description'      => 'required',
            'google_maps_url'  => 'nullable|url',
            'image'            => 'nullable|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $slug = Str::slug($request->title);
        $newImageName = null;

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $slug . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
        }

        Post::create([
            'title'            => $request->title,
            'slug'             => $slug,
            'description'      => $request->description,
            'image_path'       => $newImageName,
            'google_maps_url'  => $request->google_maps_url
        ]);

        return redirect()->route('blog.index')->with('message', 'New destination added successfully!');
    }

    /**
     * Show a single post.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form to edit a post.
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.edit', compact('post'));
    }

    /**
     * Update an existing post.
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'            => 'required|max:255',
            'description'      => 'required',
            'google_maps_url'  => 'nullable|url',
            'image'            => 'nullable|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . Str::slug($request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $post->image_path = $newImageName;
        }

        $post->title           = $request->title;
        $post->description     = $request->description;
        $post->slug            = Str::slug($request->title);
        $post->google_maps_url = $request->google_maps_url;
        $post->save();

        return redirect()->route('blog.index')->with('message', 'Destination updated successfully!');
    }

    /**
     * Delete a post.
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect()->route('blog.index')->with('message', 'Destination deleted successfully!');
    }
}
