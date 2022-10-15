@extends('layouts.auth.auth')
@section('title')
Reset Password
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="auth-form">
    <h4 class="text-center mb-4">Forgot Password</h4>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label><strong>Email</strong></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="hello@example.com">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
        </div>
    </form>
</div>
@endsection
