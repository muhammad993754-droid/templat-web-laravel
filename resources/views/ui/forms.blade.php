@extends('layouts.adminkit')

@section('title', 'Forms')

@section('content')
    <h1 class="h3 mb-3"><strong>Forms</strong></h1>

    <div class="row">
        <div class="col-12 col-lg-6">

            {{-- Basic Form --}}
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

            {{-- Input Groups --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Input Groups</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">With prefix</label>
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Username" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">With suffix</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" />
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">With button</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search…" />
                            <button class="btn btn-primary" type="button"><i class="align-middle" data-feather="search"></i></button>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Currency</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" placeholder="0.00" />
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Floating Labels --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Floating Labels</h5>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" />
                        <label for="floatingEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-0">
                        <textarea class="form-control" id="floatingTextarea" style="height:100px" placeholder="Leave a comment here"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                </div>
            </div>

            {{-- File Input --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">File Input</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Default file input</label>
                        <input class="form-control" type="file" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Small file input</label>
                        <input class="form-control form-control-sm" type="file" />
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Large file input</label>
                        <input class="form-control form-control-lg" type="file" />
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-lg-6">

            {{-- Select & Radio --}}
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
                        <div class="mb-0">
                            <label class="form-label">Range</label>
                            <input type="range" class="form-range" />
                        </div>
                    </form>
                </div>
            </div>

            {{-- Validation States --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Validation States</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Valid input</label>
                        <input type="text" class="form-control is-valid" value="Correct value" />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Invalid input</label>
                        <input type="text" class="form-control is-invalid" value="Wrong value" />
                        <div class="invalid-feedback">Please enter a valid value.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Valid select</label>
                        <select class="form-select is-valid">
                            <option selected>Choose…</option>
                            <option value="1">One</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Invalid textarea</label>
                        <textarea class="form-control is-invalid" rows="2"></textarea>
                        <div class="invalid-feedback">This field is required.</div>
                    </div>
                </div>
            </div>

            {{-- Switches --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Switches &amp; Checkboxes</h5>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switchEnabled" checked>
                        <label class="form-check-label" for="switchEnabled">Enabled toggle</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="switchDisabled" disabled>
                        <label class="form-check-label" for="switchDisabled">Disabled toggle</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="check1" checked>
                        <label class="form-check-label" for="check1">Default checkbox</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="check2">
                        <label class="form-check-label" for="check2">Unchecked</label>
                    </div>
                    <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="check3" disabled>
                        <label class="form-check-label" for="check3">Disabled</label>
                    </div>
                </div>
            </div>

            {{-- Flatpickr Date Picker --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Date / Time Picker</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Date picker</label>
                        <input type="text" class="form-control" id="flatpickr-date" placeholder="Select a date" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date &amp; time picker</label>
                        <input type="text" class="form-control" id="flatpickr-datetime" placeholder="Select date &amp; time" />
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Date range</label>
                        <input type="text" class="form-control" id="flatpickr-range" placeholder="Select date range" />
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    if (typeof flatpickr !== "undefined") {
        flatpickr("#flatpickr-date", {});
        flatpickr("#flatpickr-datetime", { enableTime: true, dateFormat: "Y-m-d H:i" });
        flatpickr("#flatpickr-range", { mode: "range" });
    }
});
</script>
@endpush
