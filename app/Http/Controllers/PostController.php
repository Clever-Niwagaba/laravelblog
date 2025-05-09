<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $post = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $post ?? collect()]);
    }

    // Create Post
    public function create()
    {
        return view('posts.create');
    }

    // Store post
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $post = new Post;

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image = $file_name;

        $post = new Post([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file_name,
        ]);

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
