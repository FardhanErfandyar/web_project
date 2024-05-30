<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function publish(Request $request)
    {
        $posts = Post::all();

        return view('dashboard.posts.publish', [
            'posts' => $posts
        ]);
    }

    public function index(Request $request)
    {

        // Mengambil data postingan dan melewatkan ke tampilan


        // Menerima pesan atau data lain yang Anda kirimkan dari metode insertlapangan()
        $message = $request->session()->get('message');

        // Mengembalikan tampilan dengan data postingan dan pesan sukses (jika ada)
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'message' => $message
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'districts' => District::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:posts',
            'district_id' => 'required',
            'address' => 'required',
            'timeweekends' => 'required',
            'timeweekdays' => 'required',
            'facility' => 'nullable',
            'price' => 'required',
            'map' => 'nullable',
            'images.*' => 'required|image|file',
        ]);

        if ($request->hasFile('images')) {
            $totalImages = count($request->file('images'));
            if ($totalImages > 5) {
                return redirect()->back()->with('error', 'Maksimal 5 foto');
            }
        }

        $validatedData['map'] = strip_tags($request->map, '<iframe>');

        $validatedData['user_id'] = auth()->user()->id;

        $post = Post::create($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('post-images');
                $post->images()->create(['image' => $filename]);
            }
        }

        return redirect('/dashboard/posts')->with('success', 'Lapangan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.editpost', [
            'post' => $post,
            'districts' => District::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $imageCount = $post->images()->count();

        $maxImagesAllowed = 5;

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:posts,name,' . $post->id . ',id',
            'district_id' => 'required',
            'address' => 'required',
            'timeweekends' => 'required',
            'timeweekdays' => 'required',
            'facility' => 'nullable',
            'price' => 'required',
            'map' => 'nullable',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $validatedData['map'] = strip_tags($request->map, '<iframe>');

        $validatedData['user_id'] = auth()->user()->id;

        $post->update($validatedData);

        if ($request->hasFile('images')) {
            $newImageCount = count($request->file('images')) + $imageCount;

            if ($newImageCount > $maxImagesAllowed) {
                return redirect()->back()->with('error', 'Anda hanya diperbolehkan menambahkan ' . ($maxImagesAllowed - $imageCount) . ' foto lagi');
            }

            // Menambahkan gambar baru ke postingan
            foreach ($request->file('images') as $image) {
                $filename = $image->store('post-images');
                $post->images()->create(['image' => $filename]);
            }
        }

        return redirect('/dashboard/posts')->with('success', 'Lapangan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        foreach ($post->images as $image) {
            Storage::delete($image->image);
        }

        return redirect('/dashboard/posts')->with('success', 'Post berhasil dihapus');
    }


}
