<?php

namespace App\Http\Controllers;

use App\Models\District;
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

        $posts->with('images');

        return view('home', [
            'title' => 'All Posts',
            'posts' => $posts->paginate(33),
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $posts = Post::where(function ($query) use ($search) {
            $query->where("name", "like", "%$search%")
                ->orWhere("address", "like", "%$search%");
        })
            ->orWhereHas('district', function ($query) use ($search) {
                $query->where("name", "like", "%$search%");
            })
            ->with('images')
            ->paginate(33);

        return view('home', compact('posts', 'search'));
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        $district = $post->district->slug;

        return view('detail', [
            'post' => $post,
            'districtId' => $district,
        ]);
    }
}
