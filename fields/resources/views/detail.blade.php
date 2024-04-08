

@extends('layouts.main')


@section('detail')
    <div id="detail">
        <h2>{{ $post->name}}</h2>
        <img src="{{ $post ->image }}" alt="">
        <h3>{{ $post ->address }}</h3>
        <h3>{{ $post->price }}</h3>
        <h3>{{ $post->district->name }}</h3>
        <h3>{{ $post->time }}</h3>
        <h3>{{ $post->facility }}</h3>
    </div>
@endsection