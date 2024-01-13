<link rel="stylesheet" href="{{asset('assets/css/catalogue.css')}}">

@extends('base')
@section('title', "Luna Tales - Catalogue")
@section('content')
    <div class="logos">
        <img class="grid" src="/assets/img/grid.svg">
        <img class="noise" src="/assets/img/noise.svg">

        <div class="logos-slide">
            <img src="/assets/banner/banner1.jpeg" />
            <img src="/assets/banner/banner2.jpeg" />
            <img src="/assets/banner/banner3.jpeg" />
            <img src="/assets/banner/banner4.jpeg" />
            <img src="/assets/banner/banner5.jpeg" />
        </div>
        <div class="fond"></div>
    </div>
    <h1 class="title">Catalogue</h1>
    <div class="content">

        <div class="library">
            <form  class="recherche" action="{{ route('app_catalogue') }}" method="get">

                <div class="search">
                    <input       class="search-input"
                                 type="text" name="search" placeholder="Rechercher..." value="{{ $searchTerm }}">
                    <button class="search-button" type="submit">Rechercher</button>
                </div>

                <div class="raw">
                    <select name="type" onchange="this.form.submit()">
                        <option value="">Sélectionnez un type</option>
                        <option value="e-book" {{ $selectedType == 'e-book' ? 'selected' : '' }}>E-Book</option>
                        <option value="audiobook" {{ $selectedType == 'audiobook' ? 'selected' : '' }}>Audiobook</option>
                    </select>

                    <select name="genre" onchange="this.form.submit()">
                        <option value="">Sélectionnez un genre</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre }}" {{ $selectedGenre == $genre ? 'selected' : '' }}>
                                {{ $genre }}
                            </option>
                        @endforeach
                    </select>

                    @foreach (range('A', 'Z') as $letter)
                        <a href="{{ route('app_catalogue', ['letter' => $selectedLetter === $letter ? '' : $letter, 'genre' => $selectedGenre]) }}"
                           class="letters {{ $selectedLetter === $letter ? 'active-letter' : '' }}">
                            {{ $letter }}
                        </a>
                    @endforeach
                </div>

            </form>

            @if(count($books) > 0)
                    <div class="books-grid">
                        @foreach($books as $book)
                            <a href="{{ route('app_article', ['id' => $book->id]) }}" class="book-card">

                                <div class="card__face card__face--front">
                                    <img src="{{ $book->cover_url }}" alt="{{ $book->title }}"/>
                                    <div class="front-info">
                                        <img class="front-info-cover" src="{{ $book->cover_url }}" alt="{{ $book->title }}" />
                                        <h3 class="book-title">{{ $book->title }}</h3>
                                        <p class="book-author">Auteur: {{ $book->author }}</p>
                                    </div>
                                </div>
                            </a>

                        @endforeach
                    </div>
            @else
                <div id="noResultsTemplate">Aucun résultat trouvé.</div>
            @endif

        </div>

    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>
@endsection

