<link rel="stylesheet" href="{{asset('assets/css/article.css')}}">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@extends('base')
@section('title', "Luna Tales - Article")
@section('content')
    <div class="content">
        <div class="logos">
            <img class="grid" src="/assets/img/grid.svg">
            <img class="noise" src="/assets/img/noise.svg">
            <div class="fond"></div>
        </div>

        <div class="card">
            <img class="cover-img" src="/{{ $book->cover_url }}">

            <div class="info">

                <h1 class="title">{{ $book->title }}</h1>

                <div class="data-book">
                    <p>De : <a class="link-catalogue" href="{{ route('app_catalogue', ['search' => $book->author, 'type' => '', 'genre' => '']) }}">{{ $book->author }}</a></p>
                    <p>Genre : <a class="link-catalogue" href="{{ route('app_catalogue', ['search' => '', 'type' => '', 'genre' => $book->genre]) }}">{{ $book->genre }}</a></p>

                    @if($book->type == 'audiobook')
                        <p>Durée : {{ $book->listening_time }}</p>
                    @endif

                    <div id="wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <input class="star" type="radio" id="star{{ $i }}" name="star" {{ $i == $book->rating ? 'checked' : '' }} />
                            <label class="star-label" for="star{{ $i }}"></label>
                        @endfor
                    </div>


                </div>

                <div class="achat">
                    <a href="#" class="buy-button">Acheter pour {{$book->price}} €</a>
                    <a href="#" class="favori">Ajouter à la liste d'envie</a>
                    <div class="partager">
                        <p>Partager</p>
                        <a href="#" class="facebook"><img src="/assets/img/facebook.svg"></a>
                        <a href="#" class="x"><img src="/assets/img/x.svg"></a>
                    </div>

                </div>
                <div class="description">
                    <h3>Desciption</h3>
                    <p>{{$book->description}}</p>
                </div>
            </div>

        </div>


    </div>



@endsection
