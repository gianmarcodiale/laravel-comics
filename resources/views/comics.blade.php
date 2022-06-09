@extends('layouts.app')

@section('content')
    <section class="comics">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
                @foreach ($comics_list as $comic)
                    <div class="col">
                        <div class="card-img">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection