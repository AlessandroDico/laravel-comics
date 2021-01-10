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
                                    <i class="fas fa-caret-down"></i>
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
        <div class="comic-spec-table">
            <div class="small-container">
                <div class="spec-left">
                    <h2>Talent</h2>
                    <ul>
                        <li>
                            <div class="spec-title">
                                <h3>Art by:</h3>
                            </div>
                            <div class="artists">
                                @foreach ($book['artists'] as $artist)
                                    <span>{{ $artist }}</span>@if (!$loop->last),@endif
                                        {{-- scritto attaccato per non avere lo spazio in pagina --}}
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="spec-title">
                                <h3>Written by:</h3>
                            </div>
                            <div class="writers">
                                @foreach ($book['writers'] as $writer)
                                    <span>{{ $writer }}</span>@if (!$loop->last),@endif
                                        {{-- scritto attaccato per non avere lo spazio in pagina --}}
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="spec-right">
                    <h2>Specs</h2>
                    <ul>
                        <li>
                            <h3>Series:</h3>
                            <span class="text-uppercase">{{ $book['series'] }}</span>
                        </li>
                        <li>
                            <h3>U.S. Price:</h3>
                            <span class="dark-text">{{ $book['price'] }}</span>
                        </li>
                        <li>
                            <h3>On Sale Date:</h3>
                            <span class="dark-text">{{ $book['sale_date'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="comic-spec-icons">
            <div class="small-container">
                <div class="spec-icons-container">
                    <div class="spec-card-icon">
                        <h4 class="text-uppercase">digital comics</h4>
                        <div class="icon-container"></div>
                    </div>
                    <div class="spec-card-icon">
                        <h4 class="text-uppercase">digital comics</h4>
                        <div class="icon-container"></div>
                    </div>
                    <div class="spec-card-icon">
                        <h4 class="text-uppercase">digital comics</h4>
                        <div class="icon-container"></div>
                    </div>
                    <div class="spec-card-icon">
                        <h4 class="text-uppercase">digital comics</h4>
                        <div class="icon-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
