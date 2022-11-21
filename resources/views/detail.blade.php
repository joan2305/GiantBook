@extends('layout.app')

@section('title', $book->title)

@section('content')
    <div class="container text-center mt-4"style="color:steelblue; font-family: 'Silkscreen', cursive">
        <h1>Book Detail</h1>
    </div>
    <div class="container mt-4">
        <img src="{{ asset('storage/images/books/' . $book->image) }}" class="img-fluid rounded d-block mx-auto"
            alt="...">
        <div class="card mx-auto mt-3 mb-3 border-0" style="width: 30rem; background-color:blanchedalmond">
            <div class="card-body">
                <h5 class="card-title">Title : {{ $book->title }}</h5>
                <p class="card-text mb-1">Author : {{ $book->author }}</p>
                <p class="card-text mb-1">Publisher : {{ $book->publisher->name }}</p>
                <p class="card-text mb-1">Year : {{ $book->year }}</p>
                <p class="card-text mb-1">Synopsis : </p>
                <p class="card-text mb-2">{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
@endsection
