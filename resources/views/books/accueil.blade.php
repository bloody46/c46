@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenue à notre bibliothèque en ligne</h1>
        <p class="lead">Trouvez le livre que vous cherchez parmi notre collection de milliers de titres.</p>
        <hr class="my-4">
        <form action="{{ route('books.search') }}" method="GET">
            <div class="form-group">
                <label for="search">Recherche de livres :</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Entrez le titre, l'auteur ou un mot-clé">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Nouveautés</h2>
            <ul>
                @foreach($new_books as $book)
                    <li><a href="{{ route('books.show', $book->id) }}">{{ $book->title }} par {{ $book->author }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Les plus populaires</h2>
            <ul>
                @foreach($popular_books as $book)
                    <li><a href="{{ route('books.show', $book->id) }}">{{ $book->title }} par {{ $book->author }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
