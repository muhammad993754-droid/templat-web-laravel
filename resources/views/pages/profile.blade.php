@extends('layouts.adminkit')

@section('title', 'Profile')

@section('content')
    <h1 class="h3 mb-3"><strong>Profile</strong></h1>

    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Details</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="{{ auth()->user()->name ?? 'User' }}"
                        class="img-fluid rounded-circle mb-2" width="128" height="128" />
                    <h5 class="card-title mb-0">{{ auth()->user()->name ?? 'Charles Hall' }}</h5>
                    <div class="text-muted mb-2">{{ auth()->user()->email ?? 'charleshal@adminkit.io' }}</div>
                    <div>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">Skills</h5>
                    <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                    <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                    <a href="#" class="badge bg-primary me-1 my-1">PHP</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Bootstrap</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Laravel</a>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">About</h5>
                </div>
                <div class="card-body h-100">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                </div>
            </div>

            <div class="row g-2 mt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Activity</h5>
                            <p class="card-text text-muted">Logged in {{ now()->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Account</h5>
                            <p class="card-text text-muted">Member since {{ auth()->user()->created_at?->format('d M Y') ?? now()->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
