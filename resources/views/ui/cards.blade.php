@extends('layouts.adminkit')

@section('title', 'Cards')

@section('content')
    <h1 class="h3 mb-3"><strong>Cards</strong></h1>

    {{-- Basic cards --}}
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

    {{-- Card with List Group --}}
    <div class="row mt-3">
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Card with List Group</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-footer">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        {{-- Card with Nav Tabs --}}
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-home" type="button">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-profile" type="button">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-contact" type="button">Contact</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-home">
                            <p class="card-text">Home tab content. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-profile">
                            <p class="card-text">Profile tab content. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-contact">
                            <p class="card-text">Contact tab content. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card with Nav Pills --}}
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pill-home" type="button">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pill-profile" type="button">Profile</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pill-home">
                            <p class="card-text mb-0">Home pill content. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="tab-pane fade" id="pill-profile">
                            <p class="card-text mb-0">Profile pill content. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Horizontal card --}}
    <div class="row mt-3">
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Horizontal Card</h5>
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/photos/unsplash-2.jpg') }}" class="img-fluid rounded-start h-100" style="object-fit:cover;" alt="Horizontal image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Horizontal Card Title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stretched Link Card --}}
        <div class="col-12 col-lg-4">
            <div class="card">
                <img src="{{ asset('img/photos/unsplash-3.jpg') }}" class="card-img-top" alt="Photo">
                <div class="card-body">
                    <h5 class="card-title">Stretched Link Card</h5>
                    <p class="card-text">The entire card becomes clickable via the stretched link utility.</p>
                    <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Cards with footer --}}
    <div class="row mt-3">
        <div class="col-sm-6 col-xl-4">
            <div class="card text-center">
                <div class="card-header">Featured</div>
                <div class="card-body">
                    <h5 class="card-title">Special title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">2 days ago</div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card text-white bg-success">
                <div class="card-header">Success</div>
                <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title.</p>
                    <a href="#" class="btn btn-light btn-sm">Learn more</a>
                </div>
                <div class="card-footer text-white-50 small">Updated just now</div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card text-white bg-danger">
                <div class="card-header">Danger</div>
                <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title.</p>
                    <a href="#" class="btn btn-light btn-sm">Learn more</a>
                </div>
                <div class="card-footer text-white-50 small">Updated 5 mins ago</div>
            </div>
        </div>
    </div>
@endsection
