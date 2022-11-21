@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container text-center mt-4"style="color:steelblue; font-family: 'Silkscreen', cursive">
        <h1>Contact</h1>
    </div>
    <div class="container d-flex justify-content-center mt-4">
        <div class="card border-dark mb-5" style="width: 50rem;">
            <div class="card-header text-center">Giant Book</div>
            <div class="card-body text-dark">
                <h5 class="card-text">Store Address</h5>
                <p class="card-text">Jalan Pembangunan Baru Raya, <br>Kompleks Pertokoan Emerald Blok III/12 <br> Bintaro,
                    Tangerang Selatan <br>Indonesia</p>
                <h5 class="card-text">Open Daily</h5>
                <p class="card-text">08:00-20:00</p>
                <h5 class="card-text">Contact</h5>
                <p class="card-text">Phone : +62 2109 6751</p>
                <p class="card-text">Email : giantBook2022@gmail.com</p>
                <h5 class="card-title">Thank You for Your Support!</h5>
            </div>
        </div>
    </div>
@endsection
