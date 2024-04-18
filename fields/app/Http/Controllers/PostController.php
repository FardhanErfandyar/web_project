<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts->where('name', 'like', '%' . request('search') . '%');
        }

        return view('home', [
            'title' => 'All Posts',
            'posts' => $posts->paginate(33)
        ]);
    }

    public function show($id)
    {

        return view('detail', [
            'post' => Post::findOrFail($id),
        ]);
    }
}
