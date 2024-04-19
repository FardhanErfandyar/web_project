

@extends('layouts.main')


@section('detail')
    <div id="detail">
        <h2>{{ $post->name}}</h2>
        <img src="{{ $post ->image }}" alt="">
        <h3>Alamat: {{ $post ->address }}</h3>
        <h3>Harga: {{ $post->price }}</h3>
        <h3>Kecamatan: {{ $post->district->name }}</h3>
        <h3>Jam Buka: {{ $post->time }}</h3>
        <h3>Fasilitas: {{ $post->facility }}</h3>
    </div>
@endsection