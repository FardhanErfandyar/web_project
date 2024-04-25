

@extends('layouts.main')


@section('detail')
    <div id="detail">
        <h2>{{ $post->name}}</h2>
        @foreach($post->images as $image)
            <img src="{{ asset('storage/'.$image->image) }}" alt="{{ $post->name }}">
        @endforeach
        <h3>Alamat: {{ $post ->address }}</h3>
        <h3>Harga: {{ $post->price }}</h3>
        <h3>Kecamatan: {{ $post->district->name }}</h3>
        <h3>Jam Buka: {{ $post->time }}</h3>
        <h3>Fasilitas: {{ $post->facility }}</h3>
    </div>
@endsection