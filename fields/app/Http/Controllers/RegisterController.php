<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("signup", [
            "title" => "Sign Up",
            "active" => "register",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string|min:4|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:6|confirmed",
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Success!')->send();

    }
}
