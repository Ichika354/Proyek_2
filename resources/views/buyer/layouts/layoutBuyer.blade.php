<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    {{-- <link rel="stylesheet" href="style/dashboard.css"> --}}
    <link rel="stylesheet" href="{{ asset('style/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('style/font/font.css') }}">
    <link rel="stylesheet" href="{{ asset('style/index.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<style>
    .table table {
        text-align: center;
        border: 1px solid black;
    }

    .table table th {
        padding: .5em;
        border: 1px solid black;
    }

    .table table td {
        padding: .4em;
        border: 1px solid black;
    }

    .table a i {
        font-size: 25px;
    }

    table {
        border-collapse: collapse;
    }

    td {
        border: none;
    }
</style>

<body>

    <div class="wrapper">
        @include('seller.layouts.navbarAdmin')

        @yield('content')
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
