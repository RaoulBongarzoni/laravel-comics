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
            <img class="comicCard" src="{{$fumetto['thumb']}}" alt="">
            <h3>{{$fumetto['title']}}</h3>

        </div>
        @endforeach
    </div>

</section>


<style scoped>
    .cardDisplayer {
        position: relative;
        height: 100%;

        display: flex;
        justify-content: space-evenly;
        margin: 0 auto;
        align-items: center;
        flex-wrap: wrap;

    }

    .card {
        width: 20%;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;

        margin: 1rem
    }

    .comicCard {
        width: 100%;
        height: 100%;
        aspect-ratio: 1;
        object-fit: cover;

    }
</style>


@endsection