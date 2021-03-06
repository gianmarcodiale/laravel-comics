@extends('layouts.app')

@section('content')
    <div class="blue_banner">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="" class="thumb">
        </div>
    </div>

    <section class="comic_description">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2 class="text-uppercase pt-5">{{ $comic['title'] }}</h2>
                    <div class="price">
                        <h6>U.S. Price: {{ $comic['price'] }}</h6>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="col-4 text-end pt-5">
                    <h4 class="text-uppercase">advertisement</h4>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="comic_info pt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <h3>Talent</h3>
                    <div class="artists">
                        <span>Art by: </span>
                        @foreach ($comic['artists'] as $artists_list)
                            <span class="text-primary">{{ $artists_list }}</span>
                        @endforeach
                    </div>
                    <div class="writers">
                        <span>Written by: </span>
                        @foreach ($comic['writers'] as $writers_list)
                            <span class="text-primary">{{ $writers_list }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div class="series">
                        <span>Series: </span>
                        <span class="text-primary">{{ $comic['series'] }}</span>
                    </div>
                    <div class="specs_price">
                        <span>U.S. Price: </span>
                        <span>{{ $comic['price'] }}</span>
                    </div>
                    <div class="sales">
                        <span>On Sale Date: </span>
                        <span>{{ $comic['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="banner bg-primary py-5 text-white text-uppercase">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img width="60" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <span>digital comics</span>
                </div>
                <div class="col">
                    <img width="60" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <span>dc merchandise</span>
                </div>
                <div class="col">
                    <img width="60" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <span>subscription</span>
                </div>
                <div class="col">
                    <img width="60" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <span>comic shop locator</span>
                </div>
                <div class="col">
                    <img width="60" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <span>dc power visa</span>
                </div>
            </div>
        </div>
    </div>
@endsection
