@extends('layouts.adminkit')

@section('title', 'Settings')

@section('content')
    <h1 class="h3 mb-3"><strong>Settings</strong></h1>

    @if (session('status') === 'profile-updated')
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Profile updated successfully.
        </div>
    @endif

    @if (session('status') === 'password-updated')
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Password updated successfully.
        </div>
    @endif

    <div class="row">
        <div class="col-md-3 col-xl-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Account Settings</h5>
                </div>
                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#profile-info">
                        Profile Information
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password-update">
                        Update Password
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#delete-account">
                        Delete Account
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-xl-10">
            <div class="tab-content">
                @include('profile.partials.update-profile-information-form')
                @include('profile.partials.update-password-form')
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection
