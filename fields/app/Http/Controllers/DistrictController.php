<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
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
}
