<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class InsertFieldController extends Controller
{
    public function index(){
    
        return view('dashboard.posts.tambahdata');
    }

    public function insertlapangan(Request $request)
    {
        // Buat entri baru di model Post
        Post::create($request->all());

        // Sesi flash untuk pesan sukses
        session()->flash('message', 'Data lapangan berhasil ditambahkan');

        // Redirect ke route 'posts'
        return redirect()->route('posts');
    }

}
