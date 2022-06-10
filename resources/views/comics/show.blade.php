@extends('layouts.app')

@section('content')
    <div class="blue_banner">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="" class="thumb">
        </div>
    </div>

    <section class="comic_info">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <h2 class="text-uppercase pt-5">{{ $comic['title'] }}</h2>
                    <div class="price">
                        <h6>U.S. Price: {{ $comic['price'] }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
