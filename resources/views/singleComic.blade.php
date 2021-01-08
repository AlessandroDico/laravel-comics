@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section class="single-comic">
        <div class="small-container">
            <p>{{ $book['title'] }}</p>
        </div>
    </section>
@endsection
