@extends('layouts.app')

@section('content')
    <div class="bg-color">
        <form class="form mt-5" action="{{ route('register') }}" method="POST">
            @csrf
            <span class="signup">Sign Up</span>


            <input type="text" placeholder="Fullname" class="form--input" name="name" value="{{ old('name') }}" required>
            <input type="text" placeholder="NPM" class="form--input" name="npm" value="{{ old('npm') }}" required>
            <input type="number" placeholder="Number Phone" class="form--input" name="numberPhone"
                value="{{ old('numberPhone') }}" required>
            <input type="password" placeholder="Password" class="form--input" name="password">
            <input type="password" placeholder="Confirm password" class="form--input" name="password_confirmation">
            <select name="role" id="role" class="form--input">
                <option selected disabled>Choose</option>
                <option value="Seller">Seller</option>
                <option value="Buyer">Buyer</option>
            </select>
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@error('npm')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'NPM Harus merupakan NPM ULBI',
        })
    </script>
@enderror
@error('password')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}',
        })
    </script>
@enderror
