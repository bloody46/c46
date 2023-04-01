@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="img-fluid mb-3">
            </div>
            <div class="col-md-6">
                <h2>{{ $book->title }}</h2>
                <p class="lead mb-4">Auteur : {{ $book->author }}</p>
                <p>Date de publication : {{ $book->publication_date }}</p>
                <p>Description : {{ $book->description }}</p>
            </div>
        </div>
    </div>
@endsection
