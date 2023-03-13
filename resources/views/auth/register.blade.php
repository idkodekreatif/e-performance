@extends('layouts.auth.auth')
@section('title')
Register
@endsection

@section('content')
<div class="auth-form">
    <h4 class="text-center mb-4">Sign up your account</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label class="mb-1"><strong>Name</strong></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Email</strong></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="hello@example.com">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Role</strong></label>
            <select class="default-select form-control wide mb-3" name="role" required>
                <option value="">-- Select --</option>
                <option value="dosen">Dosen</option>
                <option value="tendik">Tendik</option>
            </select>

            @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Fakultas</strong></label>
            <select class="default-select form-control wide mb-3" name="fakultas">
                <option value="">-- Select --</option>
                <option value="FB">Fakultas Bisnis</option>
                <option value="FK">Fakultas Kesehatan</option>
            </select>

            @error('fakultas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Prodi</strong></label>
            <select class="default-select form-control wide mb-3" name="prodi">
                <option value="">-- Select --</option>
                <option value="GZ">Prodi Gizi</option>
                <option value="PR">Prodi Keperawatan</option>
                <option value="BD">Prodi Kebidanan</option>
                <option value="MN">Prodi Manajemen</option>
                <option value="AK">Prodi Akuntansi</option>
            </select>

            @error('prodi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Password</strong></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="mb-1"><strong>Confirm Password</strong></label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirm Password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
    </div>
</div>
@endsection
