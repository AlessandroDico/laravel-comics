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
        <div class="comic-description">
            <div class="small-container">
                <div class="comic-description-container">
                    <div class="comic-description-left">
                        <h1>{{ $book['title'] }}</h1>
                        <div class="comic-description-shop-info">
                            <div class="shop-info-top">
                                <span class="price">
                                    <span>U.S. Price</span>
                                    <span>{{ $book['price'] }}</span>
                                </span>
                                <span class="available text-uppercase">
                                    Available
                                </span>
                                <span class="check-availability">
                                    Check-Availability
                                </span>
                            </div><div class="shop-info-bottom">
                                <p class="comic-description-paragraph">
                                    {{ $book['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comic-description-right">
                        <span class="text-uppercase">Advertisement</span>
                        <div class="description-img-container">
                            <img src="{{ asset('images/adv.jpg') }}" alt="advertising image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
