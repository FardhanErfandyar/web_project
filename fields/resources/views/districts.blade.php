@extends('layouts.main')

@section('districts')
        <div class="districts">
            <h1>Post Districts</h1>
            @foreach ($districts as $district)
            <ul>
                <li>
                    <h2>
                        <a href="/districts/{{ $district->slug }}">{{ $district->name }}</a>
                    </h2>
                </li>
            </ul>
            @endforeach
        </div>
@endsection