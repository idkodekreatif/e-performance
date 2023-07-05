@extends('layouts.auth.auth')
@section('title')
    Login
@endsection

@section('content')
    <div class="auth-form">
        <h4 class="text-center mb-4">Sign in your account</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="mb-1"><strong>Email</strong></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="hello@example.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="mb-1"><strong>Password</strong></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row d-flex justify-content-between mt-4 mb-2">
                <div class="mb-3">
                    <div class="form-check custom-checkbox ms-1">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember my preference</label>
                    </div>
                </div>
                <div class="mb-3">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
            </div>
        </form>
        <div class="new-account mt-3">
            {{-- <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p> --}}
        </div>
    </div>
@endsection
