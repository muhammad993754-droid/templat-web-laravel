@extends('layouts.adminkit')

@section('title', 'Buttons')

@section('content')
    <h1 class="h3 mb-3"><strong>Buttons</strong></h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Default Buttons</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Primary</a>
                    <a href="#" class="btn btn-secondary">Secondary</a>
                    <a href="#" class="btn btn-success">Success</a>
                    <a href="#" class="btn btn-danger">Danger</a>
                    <a href="#" class="btn btn-warning">Warning</a>
                    <a href="#" class="btn btn-info">Info</a>
                    <a href="#" class="btn btn-light">Light</a>
                    <a href="#" class="btn btn-dark">Dark</a>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Outlined Buttons</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary">Primary</a>
                    <a href="#" class="btn btn-outline-secondary">Secondary</a>
                    <a href="#" class="btn btn-outline-success">Success</a>
                    <a href="#" class="btn btn-outline-danger">Danger</a>
                    <a href="#" class="btn btn-outline-warning">Warning</a>
                    <a href="#" class="btn btn-outline-info">Info</a>
                    <a href="#" class="btn btn-outline-light">Light</a>
                    <a href="#" class="btn btn-outline-dark">Dark</a>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sizes</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg">Large</a>
                    <a href="#" class="btn btn-primary">Default</a>
                    <a href="#" class="btn btn-primary btn-sm">Small</a>
                </div>
            </div>
        </div>
    </div>
@endsection
