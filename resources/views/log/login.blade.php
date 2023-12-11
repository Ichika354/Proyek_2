@extends('log.layoutLog')
@section('title', 'Login')
@section('content')

    <form class="form" action="{{ route('Login.Post') }}" method="POST">
        @csrf
        <span class="signup">Sign In</span>
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        @if (session()->has('Error'))
            <div class="alert alert-danger">{{ session('Error') }}</div>
        @endif

        @if (session()->has('Success'))
            <div class="alert alert-success">{{ session('Success') }}</div>
        @endif
        <input type="text" placeholder="NPM" class="form--input" name="npm">
        <input type="password" placeholder="Password" class="form--input" name="password">
        <div class="gap">
            <button class="form--submit b">
                <a href="{{ route('BackHome') }}">
                    Back
                </a>
            </button>
            <button class="form--submit" type="submit">
                Sign In
            </button>
        </div>
    </form>
@endsection
