@extends('layout.app')

@section('title', $publisher->name)

@section('content')
    <div class="container mt-4 d-flex">
        <img src="{{ asset('storage/images/publishers/' . $publisher->image) }}" alt="..." class="img-fluid mt-5"
            style="width:25%; height:25%">
        <div class="card mx-auto mt-3 mb-3 border-0" style="width: 30rem; background-color:blanchedalmond">
            <div class="card-body">
                <h5 class="card-title">{{ $publisher->name }}</h5>
                <p class="card-text mb-1">Address : {{ $publisher->address }}</p>
                <p class="card-text mb-1">Phone : {{ $publisher->phone }}</p>
                <p class="card-text mb-1">Email : {{ $publisher->email }}</p>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="text-center mt-4 mb-4"style="color:steelblue; font-family: 'Silkscreen', cursive">
            <h6>Book List by {{ $publisher->name }}</h6>
        </div>
        <div class="row d-flex justify-content-around">
            @foreach ($books as $book)
                <div class="card mb-3" style="width: 18rem;">
                    <img src="{{ asset('storage/images/books/' . $book->image) }}" class="card-img-top pt-2"
                        style="height: 24rem;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">by</h6>
                        <h6><span class="badge bg-light text-black-50">{{ $book->author }}</span></h6>
                        <a href="{{ route('detailPage', $book->id) }}" class="btn btn-primary"
                            style="background-color: steelblue">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
