<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::latest();

        if ($request->filled('search')) {
            $post->where('name', 'like', '%' . $request->input('search') . '%');
        }

        return view('home', [
            'title' => 'All Posts',
            'posts' => $post->get()
        ]);
    }

    public function show($id)
    {
        return view('detail', [
            'post' => Post::find($id)
        ]);
    }
}
