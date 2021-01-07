@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section class="cards-section">
        <div class="container">
            <h1 class="text-uppercase">current series</h1>
            <div class="cards-container">
                @foreach ($comics as $book)
                    <div class="card">
                        <div class="book-image-container">
                            <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                        </div>
                        <p class="text-uppercase">{{ $book['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="cards-button">
                <button type="button" class="text-uppercase">Load more</button>
            </div>
        </div>
    </section>

@endsection
