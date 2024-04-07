@extends('layouts.main')

@section('profile')
    <div class="profile-container">
        <div class="profile-image">
            <img src="/img/black.jpg" alt="">
        </div>
        <h1>{{ auth()->user()->name }}</h1>
        <p>{{ auth()->user()->email }}</p>
        <button class="button">Edit Profile</button>
    </div>
@endsection