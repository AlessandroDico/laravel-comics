@extends('layouts.app')

@section('content')
    <h1>homepage</h1>

    @foreach ($comics as $book)
        <div class="book-image-container">
            <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
        </div>
        <p>{{ $book['series'] }}</p>
    @endforeach

@endsection
