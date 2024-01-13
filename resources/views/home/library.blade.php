<link rel="stylesheet" href="{{asset('assets/css/library.css')}}">
@extends('base')
@section('title', "Luna Tales - Bibliothèque")
@section('content')
    <div class="content">
        <div class="logos">
            <img class="grid" src="/assets/img/grid.svg">
            <img class="noise" src="/assets/img/noise.svg">

            <div class="fond"></div>
        </div>
        <div class="header">
            <h1 class="title">Bibliothèque</h1>

            <div class="search">
                <input type="text" class="search-input" placeholder="Search">
                <button type="submit" class="search-button">Recherche</button>
            </div>


            <ul class="filter">
                <li><a href="#" class="selecteur selected">Tout</a></li>
                <li><a href="#" class="selecteur">Audiobook</a></li>
                <li><a href="#" class="selecteur">E-book</a></li>
                <li><a href="#" class="selecteur">Liste d'envies</a></li>
                <li><a href="#" class="selecteur">Auteurs</a></li>
            </ul>
            <span class="separator"></span>
        </div>





    </div>

@endsection
