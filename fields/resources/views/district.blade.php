@extends('layouts.main')

@section('district')
    <div class="districts">
        <h1>District: <span>{{ $district }}</span></h1>
        <section id="Lapangan1" class="section-p1">
            <div class="pro-container">

                @foreach($posts as $post)
                    <a href="/post/{{ $post->id }}" class="pro" >
                        <img src="{{ asset('storage/'.$post->images[0]->image) }}" alt="{{ $post->name }}">
                        <div class="des">
                            <span>{{ $post->district->name}}</span>
                            <h5>{{ $post->name}}</h5>
                            <h4>{{ $post->time}}</h4>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
@endsection