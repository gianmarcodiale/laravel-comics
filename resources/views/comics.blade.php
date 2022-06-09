@section('content')
    <section class="comics">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection