@extends('layouts.adminkit')

@section('title', 'Buttons')

@section('content')
    <h1 class="h3 mb-3"><strong>Buttons</strong></h1>

    <div class="row">
        <div class="col-12">

            {{-- Default Buttons --}}
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

            {{-- Outlined Buttons --}}
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

            {{-- Sizes --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sizes</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary btn-lg">Large</button>
                    <button class="btn btn-primary">Default</button>
                    <button class="btn btn-primary btn-sm">Small</button>
                </div>
            </div>

            {{-- Disabled State --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Disabled State</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" disabled>Primary Disabled</button>
                    <button class="btn btn-secondary" disabled>Secondary Disabled</button>
                    <button class="btn btn-success" disabled>Success Disabled</button>
                    <a href="#" class="btn btn-danger disabled" aria-disabled="true">Link Disabled</a>
                </div>
            </div>

            {{-- Loading / Spinner Buttons --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Loading / Spinner</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Loading…
                    </button>
                    <button class="btn btn-secondary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm me-1" role="status" aria-hidden="true"></span>
                        Loading…
                    </button>
                    <button class="btn btn-success" type="button" disabled>
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Saving…
                    </button>
                </div>
            </div>

            {{-- Icon Buttons --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Icon Buttons</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary"><i class="align-middle me-1" data-feather="heart"></i> Like</button>
                    <button class="btn btn-success"><i class="align-middle me-1" data-feather="check"></i> Confirm</button>
                    <button class="btn btn-danger"><i class="align-middle me-1" data-feather="trash-2"></i> Delete</button>
                    <button class="btn btn-warning"><i class="align-middle me-1" data-feather="edit-2"></i> Edit</button>
                    <button class="btn btn-info"><i class="align-middle me-1" data-feather="download"></i> Download</button>
                    <button class="btn btn-outline-primary"><i class="align-middle me-1" data-feather="upload"></i> Upload</button>
                    <button class="btn btn-outline-secondary" title="Settings"><i class="align-middle" data-feather="settings"></i></button>
                    <button class="btn btn-outline-danger" title="Close"><i class="align-middle" data-feather="x"></i></button>
                </div>
            </div>

            {{-- Block / Full-width Buttons --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Block / Full-width</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Full-width Primary</button>
                        <button class="btn btn-outline-secondary" type="button">Full-width Outlined</button>
                    </div>
                </div>
            </div>

            {{-- Button Groups --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Button Groups</h5>
                </div>
                <div class="card-body">
                    <div class="btn-group me-2" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <div class="btn-group me-2" role="group">
                        <button type="button" class="btn btn-outline-secondary">1</button>
                        <button type="button" class="btn btn-outline-secondary">2</button>
                        <button type="button" class="btn btn-outline-secondary">3</button>
                        <button type="button" class="btn btn-outline-secondary">4</button>
                    </div>
                    <div class="btn-group-vertical mt-2" role="group">
                        <button type="button" class="btn btn-success">Top</button>
                        <button type="button" class="btn btn-success">Middle</button>
                        <button type="button" class="btn btn-success">Bottom</button>
                    </div>
                </div>
            </div>

            {{-- Split Dropdown Buttons --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Dropdown &amp; Split Buttons</h5>
                </div>
                <div class="card-body d-flex flex-wrap gap-2">
                    {{-- Simple dropdown --}}
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>

                    {{-- Split primary --}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </div>

                    {{-- Split danger --}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                            <li><a class="dropdown-item" href="#">Archive</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
