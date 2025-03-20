<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display all tourism destinations.
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show form to create a new tourism post.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created tourism post.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName = null;

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . Str::slug($request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
        }

        Post::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'image_path'  => $newImageName
        ]);

        return redirect('/blog')->with('message', 'New destination added successfully!');
    }

    /**
     * Display a single tourism destination.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }

    /**
     * Show form to edit an existing tourism destination.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.edit', compact('post'));
    }

    /**
     * Update an existing tourism destination.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . Str::slug($request->title) . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $post->image_path = $newImageName;
        }

        $post->title       = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('/blog')->with('message', 'Destination updated successfully!');
    }

    /**
     * Delete a tourism destination.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/blog')->with('message', 'Destination deleted successfully!');
    }
}
