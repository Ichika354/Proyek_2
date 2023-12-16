@extends('layouts.app')

@section('content')
<div class="bg-color">
    <form class="form" action="{{ route('register') }}" method="POST">
        @csrf
        <span class="signup">Sign Up</span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="text" placeholder="Fullname" class="form--input" name="name" value="{{ old('name') }}" required>
        <input type="text" placeholder="NPM" class="form--input" name="npm" value="{{ old('npm') }}" required>
        <input type="number" placeholder="Number Phone" class="form--input" name="numberPhone"
            value="{{ old('numberPhone') }}" required  >
        <input type="password" placeholder="Password" class="form--input" name="password">
        <input type="password" placeholder="Confirm password" class="form--input" name="password_confirmation">
        <div class="gap">
            <button class="form--submit b">
                <a href="{{ url('/') }}">
                    Back
                </a>
            </button>
            <button class="form--submit">
                Sign Up
            </button>
        </div>
    </form>
</div>
@endsection
