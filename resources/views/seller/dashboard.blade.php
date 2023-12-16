@extends('seller.layouts.layoutAdmin')
@section('title', 'Dashboard')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2 mb-3">
                <div class="col-12">
                    <div class="d-block bg-white rounded shadow p-3">
                        <h2>Hello</h2>
                        <p>Selamat datang di halaman admin! Kami sangat senang Anda telah bergabung dengan kami sebagai
                            administrator. Halaman ini memberikan akses dan kontrol penuh untuk mengelola dan mengatur
                            berbagai aspek yang terkait dengan situs atau aplikasi ini.</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-bars float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">{{ $categoryCount }}</h5>
                                <p class="card-text">Kategori</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Kategori</small>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa-solid fa-box float-start fa-3x py-auto"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">{{ $productCount }}</h5>
                                <p class="card-text">Produk</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Your Produk</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
