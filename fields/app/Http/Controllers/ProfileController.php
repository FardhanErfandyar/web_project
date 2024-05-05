<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'telp' => 'nullable|regex:/^[0-9]+$/',
            'age' => 'nullable|integer',
            'address' => 'nullable|max:255',
            'image' => 'nullable|image|file',
        ]);

        $user = User::find($id);

        $oldImagePath = $user->image;

        $user->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile-images');
            $user->image = $imagePath;
        }

        if ($oldImagePath) {
            Storage::delete($oldImagePath);
        }

        $user->save();

        return redirect('/profile')->with('success', 'Profile berhasil di-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->image) {
            Storage::delete($user->image);

            $user->image = null;
            $user->save();

            return redirect('/profile')->with('success', 'Profile picture berhasil dihapus');
        } else {
            return redirect('/profile')->with('error', 'Tidak ada profile picture yang bisa dihapus');
        }
    }
}
