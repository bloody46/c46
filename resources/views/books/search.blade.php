@extends('layouts.app')

@section('title', 'Recherche de livres')

@section('content')
    <div class="container">
        <h1>Recherche de livres</h1>
        <hr>
        <form action="{{ route('books.search') }}" method="GET">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="author">Auteur :</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="publication_date">Date de publication :</label>
                <input type="date" class="form-control" id="publication_date" name="publication_date">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
@endsection
