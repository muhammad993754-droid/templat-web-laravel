<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin & Dashboard Template based on Bootstrap 5">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
    <title>Sign In | AdminKit Laravel</title>
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
                            <h1 class="h2">Welcome back!</h1>
                            <p class="lead">Sign in to your account to continue</p>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Enter your email" required autofocus autocomplete="username" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password">Password</label>
                                            <input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                type="password" name="password"
                                                placeholder="Enter your password" required autocomplete="current-password" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check align-items-center">
                                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                                <label class="form-check-label text-small" for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="text-end mb-2">
                                                <a href="{{ route('password.request') }}" class="small">Forgot your password?</a>
                                            </div>
                                        @endif
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
