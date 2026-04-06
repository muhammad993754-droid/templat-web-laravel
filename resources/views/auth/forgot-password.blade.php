<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
    <title>Forgot Password | AdminKit Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Reset Password</h1>
                            <p class="lead">Enter your email and we'll send you a reset link.</p>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Enter your email" required autofocus />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Send Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <a href="{{ route('login') }}">&larr; Back to Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
