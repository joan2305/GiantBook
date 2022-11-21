@extends('layout.app')

@section('title', 'Publishers')

@section('content')
    <div class="container text-center mt-4"style="color:steelblue; font-family: 'Silkscreen', cursive">
        <h1>Publisher List</h1>
    </div>
    @if ($publishers->count() == 0)
        <h1 class=" text-center d-flex justify-content-center mt-5">We're sorry. <br>There is no publisher
            currently...</h1>
    @else
        <div class="container mt-4">
            <div class="row d-flex justify-content-around">
                @foreach ($publishers as $publisher)
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="{{ asset('storage/images/publishers/' . $publisher->image) }}"
                                class="card-img-top pt-2 embed-responsive-item" alt="..."
                                style="height:14rem; object-fit:contain;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $publisher->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                            <p class="card-text mb-1">{{ $publisher->address }}</p>
                            <a href="{{ route('publisherDetail', $publisher->id) }}" class="btn btn-primary"
                                style="background-color: steelblue">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

@endsection
