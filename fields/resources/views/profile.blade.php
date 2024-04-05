@extends('layouts.main')

@section('profile')
    <h1>{{ auth()->user()->name }}</h1>
    <h1>{{ auth()->user()->email }}</h1>
@endsection