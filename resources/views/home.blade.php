@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <div class="container">
        <div class="cards-container">
            @foreach ($comics as $book)
                <div class="book-image-container">
                    <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                </div>
                <p>{{ $book['series'] }}</p>
            @endforeach
        </div>
    </div>

@endsection
