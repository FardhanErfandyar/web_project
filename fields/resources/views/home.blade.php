
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

        {{-- search bar --}}
        <div class="search-comp">
            <form action="/">

                <div class="search">
                    <input type="search" class="search-input" placeholder="Search...">
                    <button class="search-button" type="submit">Search</button>
                </div>
            </form>
        </div>

         {{-- section posts --}}

        <div class="pro-container">

            @if ($posts->count())

                <a href="/post/{{ $posts[0]->id }}" class="pro" >
                    <img src="{{ $posts[0]->image}}" alt="">
                    <div class="des">
                        <span>{{ $posts[0]->district->name}}</span>
                        <h5>{{ $posts[0]->name}}</h5>
                        <h4>{{ $posts[0]->time}}</h4>
                    </div>
                </a>
            @else
                <p class="no-post-found">No post found.</p>
            @endif


            @foreach($posts->skip(1) as $post)
                <a href="/post/{{ $post->id }}" class="pro" >
                    <img src="{{ $post->image}}" alt="">
                    <div class="des">
                        <span>{{ $post->district->name}}</span>
                        <h5>{{ $post->name}}</h5>
                        <h4>{{ $post->time}}</h4>
                    </div>
                </a>
            @endforeach
            
        </div>
    </section>
@endsection


