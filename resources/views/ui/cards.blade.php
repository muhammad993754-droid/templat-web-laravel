@extends('layouts.adminkit')

@section('title', 'Cards')

@section('content')
    <h1 class="h3 mb-3"><strong>Cards</strong></h1>

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <img src="{{ asset('img/photos/unsplash-1.jpg') }}" class="card-img-top" alt="Photo">
                <div class="card-body">
                    <h5 class="card-title">Card with image</h5>
                    <p class="card-text">Some quick example text to build on the card.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-header">Featured</div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card text-white bg-primary">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
