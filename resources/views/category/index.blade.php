@extends('layout.app')

@section('title', $bookcategories->first()->category->name . ' | Category')

@section('content')
    @if ($bookcategories->count() == 0)
        <h1 class=" text-center d-flex justify-content-center mt-5">We're sorry. <br>There is no book on
            {{ $bookcategories->first()->category->name }} category
            currently...</h1>
    @else
        <div class="container">
            <h3 class="text-center mt-5" style="color:steelblue; font-family: 'Silkscreen', cursive">
                {{ $bookcategories->first()->category->name }}
            </h3>
        </div>
        <div class="container mt-4">
            <div class="row d-flex justify-content-around">
                @foreach ($bookcategories as $bookcat)
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{ asset('storage/images/books/' . $bookcat->book->image) }}" class="card-img-top pt-2"
                            style="height: 24rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bookcat->book->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">by</h6>
                            <h6><span class="badge bg-light text-black-50">{{ $bookcat->book->author }}</span></h6>
                            <a href="{{ route('detailPage', $bookcat->book->id) }}" class="btn btn-primary"
                                style="background-color: steelblue">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
