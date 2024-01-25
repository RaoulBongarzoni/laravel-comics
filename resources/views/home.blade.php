@extends('layouts.app')

@section('mainContent')

<section>
    <div>
        <h2>
            Current series
        </h2>
    </div>

    <div class="cardDisplayer">
        @foreach ($fumetti as $fumetto)
        <div class="card">
            <img src="{{$fumetto['thumb']}}" alt="">
            <h3>{{$fumetto['title']}}</h3>
        </div>
        @endforeach
    </div>

</section>


@endsection