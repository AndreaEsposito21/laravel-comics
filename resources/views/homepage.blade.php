@extends('layouts.app')

@section('main_content')
    
    <div class="wrapper">
        <div class="container">

            <div class="products">
                @foreach ($comics_array as $comics)
                    <div class="product">
                        <img src=" {{ $comics['thumb']}} " alt="{{ $comics['title']}}">

                        <h3>
                            {{ $comics['series']}}
                        </h3>
                    </div>
                @endforeach
            </div>

            <div class="btn-container">
                <a>
                    Load More
                </a>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="buy-comics">
            <ul class="menu">
                <li>
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
                    <a href="#">Digital comics</a>
                </li>

                <li>
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="merchandise">
                    <a href="#">DC merchandise</a>
                </li>

                <li>
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                    <a href="#">subscription</a>
                </li>

                <li>
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="shop-locator">
                    <a href="#">Comic shop locator</a>
                </li>

                <li>
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="dc-power-visa">
                    <a href="#">DC power visa</a>
                </li>
            </ul>
        </div>
    </div>

@endsection