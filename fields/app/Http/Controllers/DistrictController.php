<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;

class DistrictController extends Controller
{
    public function index(District $district)
    {
        return view('district', [
            'title' => $district->name,
            'posts' => $district->posts,
            'district' => $district->name,
        ]);
    }

    public function dashboard(Request $request)
    {
        $districts = District::all();

        return view('dashboard.posts.adddistrict', [
            'districts' => $districts
        ]);
    }
    public function create(Request $request)
    {
        return view('dashboard.posts.createdistrict');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:districts',
            'slug' => 'required|unique:districts',
        ]);

        District::create($validatedData);

        return redirect('/dashboard/admin/districts/create')->with('success', 'District berhasil ditambah');
    }

    public function destroy(District $district)
    {
        District::destroy($district->id);

        return redirect('/dashboard/admin/districts')->with('success', 'District berhasil dihapus');
    }



}
