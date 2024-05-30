
@extends('layouts.main')

@section('home')

     <div id="header">
        <div class="container">
            <div class="header-text">
                <h2><span>Field</span>s.</h2>
                <h1>Lapangan <span>Futsal</span></h1>
            </div>
        </div>
    </div>


    <section id="Lapangan1" class="section-p1">
        <p>Temukan Lapangan pilihanmu!</p>

        {{-- search bar --}}
        <div class="search-comp">
            <form action="/search#Lapangan1" method="GET">

                <div class="search">
                    <input type="search" class="search-input" name="search" placeholder="Search...">
                    <button class="search-button" type="submit">Search</button>
                </div>
            </form>
        </div>

         {{-- section posts --}}

        <div class="pro-container">

            @if ($posts->count())

                <a href="/post/{{ $posts[0]->id}}" class="pro" >
                        <img src="{{ asset('storage/'.$posts[0]->images[0]->image) }}" alt="{{ $posts[0]->name }}">
                    <div class="des">
                        <span>{{ $posts[0]->district->name}}</span>
                        <h5>{{ $posts[0]->name}}</h5>
                        <h4>{{ $posts[0]->timeweekdays}}</h4>
                    </div>
                </a>
            @else
                <p class="no-post-found">No post found.</p>
            @endif


            @foreach($posts->skip(1) as $post)
                <a href="/post/{{ $post->id}}" class="pro" >

                    <img src="{{ asset('storage/'.$post->images[0]->image) }}" alt="{{ $post->name }}">
                    <div class="des">
                        <span>{{ $post->district->name}}</span>
                        <h5>{{ $post->name}}</h5>
                        <h4>{{ $posts[0]->timeweekdays}}</h4>
                    </div>
                </a>
            @endforeach
            
        </div>
    </section>
@endsection


