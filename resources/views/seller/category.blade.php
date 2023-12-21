@extends('seller.layouts.layoutAdmin')
@section('title', 'Kategori')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>DATA KATEGORI</h1>
                                <form class="d-flex " role="search" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                <input class="form-control me-2" name="keyword" type="search"
                                                    placeholder="Search" aria-label="Search">
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-success" name="search">Search</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            @if (Auth::user()->role == 'Seller')
                                <div class="table mt-5">
                                    <table class="table ms-0">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $category->category }}</td>
                                                <td>
                                                    <a class="btn btn-secondary"
                                                        href="{{ route('Category.Detail', $category->id_category) }}">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <a href="{{ route('Category.Add') }}" class="btn btn-primary">INPUT</a>
                                </div>
                            @else
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, consectetur corrupti,
                                    suscipit similique accusantium fugit ut dicta harum dolores, aliquam corporis eligendi
                                    laborum reiciendis quasi ratione perferendis consequatur unde adipisci.</p>

                                <div class="row g-5 mb-3 d-flex">
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="fa-solid fa-bowl-food bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">Makanan</p>
                                                <p class="card__description">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="fa-solid fa-champagne-glasses bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">Minuman</p>
                                                <p class="card__description">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="fa-solid fa-mobile bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">Elektronik</p>
                                                <p class="card__description">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="fa-solid fa-shirt bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">Pakaian</p>
                                                <p class="card__description">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="fa-solid fa-book bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">Buku</p>
                                                <p class="card__description">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
