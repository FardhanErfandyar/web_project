

@extends('layouts.main')


@section('detail')
    <div id="detail">
        <h2>{{ $post->name}}</h2>

        <section class="container-image">
            <div class="slider-wrapper">
                <div class="slider">
                    @foreach($post->images as $image)
                        <img id="slide-{{ $loop->index }}" src="{{ asset('storage/'.$image->image) }}" alt="{{ $post->name }}">
                     @endforeach
                </div>
                <div class="slider-nav">
                    @foreach($post->images as $image)
                        <a href="#slide-{{ $loop->index }}"></a>
                    @endforeach
                </div>
            </div>
        </section>


      
        <h3>Alamat: {{ $post ->address }}</h3>
        <h3>Harga: {{ $post->price }}</h3>
        <h3>Kecamatan: {{ $post->district->name }}</h3>
        <h3>Jam Buka: {{ $post->time }}</h3>
        <h3>Fasilitas: {{ $post->facility }}</h3>
    </div>
@endsection

