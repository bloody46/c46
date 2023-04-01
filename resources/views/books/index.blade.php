@extends('layouts.app')

@section('title', 'Liste des livres')

@section('content')
    <div class="container">
        <h1>Liste des livres</h1>

        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->author }}</p>
                            <p class="card-text">{{ $book->description }}</p>
                            <p class="card-text">{{ $book->publication_date }}</p>
                            <a href="#" class="btn btn-primary">Voir le livre</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
