<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\Post;

class ImageContrroller extends Controller
{
    public function destroyImage(Post $post, $id)
    {
        $image = Image::findOrFail($id);

        Storage::delete($image->image);

        $image->delete();

        return redirect('/dashboard/posts/' . $post->id . '/edit')->with('success', 'Gambar berhasil dihapus');



    }
}
