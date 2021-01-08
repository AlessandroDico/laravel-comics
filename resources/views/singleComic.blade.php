@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section class="single-comic">
        <div class="post-card-row">
            <div class="small-container">
                <div class="post-card-image-container">
                    <img src="{{ $book['thumb'] }}" alt="">
                </div>
            </div>
        </div>
        <div class="small-container">
            <p>{{ $book['title'] }}</p>
        </div>
    </section>
@endsection
