@extends('layout.app')
@section('title', 'Search Result')

@section('content')
    <div class="container text-center mt-4"style="color:steelblue; font-family: 'Silkscreen', cursive">
        <h1>Search Result</h1>
    </div>
    @if ($books->count() == 0)
        <h1 class=" text-center d-flex justify-content-center mt-5">We're sorry. <br>There is no book
            such like that...</h1>
    @else
        <div class="container mt-4">
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
    @endif

@endsection
