

@extends('layouts.main')


@section('detail')
    <div id="detail">
        <h2>{{ $post->name}}</h2>
        <img src="{{ $post ->image }}" alt="">
        <h3>{{ $post ->address }}</h3>
        <h3>{{ $post->price }}</h3>
        <td>{{ $post->address }}</td>
              <td>{{ $post->district->name }}</td>
              <td>Rp{{ $post->price }}</td>
              <td>{{ $post->time }}</td>
              <td>{{ $post->facility }}</td>

    </div>
@endsection