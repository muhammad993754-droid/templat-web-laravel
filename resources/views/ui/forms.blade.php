@extends('layouts.adminkit')

@section('title', 'Forms')

@section('content')
    <h1 class="h3 mb-3"><strong>Forms</strong></h1>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Basic Form</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Example textarea</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Select &amp; Radio</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Radios</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOptions" id="radio1" value="option1" checked>
                                <label class="form-check-label" for="radio1">Option one</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioOptions" id="radio2" value="option2">
                                <label class="form-check-label" for="radio2">Option two</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Range</label>
                            <input type="range" class="form-range" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
