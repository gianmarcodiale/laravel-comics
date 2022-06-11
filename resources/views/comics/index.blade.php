@extends('layouts.app')

@section('content')
    <section class="comics">
        <div class="container">
            <div class="section_title text-white text-uppercase">
                <h4 class="px-1 py-3">current series</h4>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
                @foreach ($comics_list as $index => $comic)
                    <div class="col">
                        <a href="{{ route('comics.show', $index) }}">
                            <div class="card-img">
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h5>{{ $comic['title'] }}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="load-more-btn">
            <button>Load More</button>
        </div>
    </section>

    <div class="banner bg-primary py-5 text-white text-uppercase">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img width="60" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    <span>digital comics</span>
                </div>
                <div class="col">
                    <img width="60" src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    <span>dc merchandise</span>
                </div>
                <div class="col">
                    <img width="60" src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                    <span>subscription</span>
                </div>
                <div class="col">
                    <img width="60" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                    <span>comic shop locator</span>
                </div>
                <div class="col">
                    <img width="60" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                    <span>dc power visa</span>
                </div>
            </div>
        </div>
    </div>
@endsection
