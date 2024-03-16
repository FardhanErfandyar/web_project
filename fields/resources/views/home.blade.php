
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

            @foreach($posts as $lapangan)
                <a href="{{ url('home/' . $lapangan['slug']) }}" class="pro" >
                    <img src="{{ $lapangan['image']}}" alt="">
                    <div class="des">
                        <span>{{ $lapangan['district']}}</span>
                        <h5>{{ $lapangan['name']}}</h5>
                        <h4>{{ $lapangan['time']}}</h4>
                    </div>
                </a>
            @endforeach
            
        </div>
    </section>
@endsection


