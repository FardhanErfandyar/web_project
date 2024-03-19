
@extends('layouts.main')

@section('home')

     <div id="header">
        <div class="container">
            <div class="header-text">
                <p>Administrasi</p>
                <h1>Lapangan <span>Futsal</span></h1>
            </div>
        </div>
    </div>

    <section id="Lapangan1" class="section-p1">
        <p>Temukan Lapangan pilihanmu!</p>
        <div class="pro-container">

            @foreach($posts as $post)
                <a href="/post/{{ $post->id }}" class="pro" >
                    <img src="{{ $post->image}}" alt="">
                    <div class="des">
                        <span>{{ $post->district}}</span>
                        <h5>{{ $post->name}}</h5>
                        <h4>{{ $post->time}}</h4>
                    </div>
                </a>
            @endforeach
            
        </div>
    </section>
@endsection


