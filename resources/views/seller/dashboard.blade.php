@extends('seller.layouts.layoutAdmin')
@if (Auth::user()->role == 'Seller')
    @section('title', 'Dashboard')
@else
    @section('title', 'Home')
@endif
@section('content')
    @if (Auth::user()->role == 'Seller')
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
    @elseif (Auth::user()->role == 'Buyer')
        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Hello {{ Auth::user()->name }}</h2>
                            <p>Selamat datang di Rumah Kewirausahaan, tempat di mana semangat berinovasi bertemu dengan visi
                                menciptakan perubahan positif. Kami mengucapkan selamat datang kepada Anda, pejuang
                                kreativitas dan pengusaha yang berani mengejar mimpi. Di sini, setiap langkah yang diambil
                                adalah langkah menuju pertumbuhan dan keberhasilan.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-2 col-sm-6 col-md-6 col-lg-6">

                    </div>
                    <div class="col-2 col-sm-6 col-md-6 col-lg-6">

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Hello Admin</h2>
                            <p>Selamat datang, Admin! Anda telah berhasil masuk ke dalam sistem dengan level akses admin.
                                Semoga Anda memiliki pengalaman yang menyenangkan dan sukses dalam menjalankan tugas-tugas
                                administratif Anda. Jika Anda memerlukan bantuan atau informasi lebih lanjut, jangan ragu
                                untuk menghubungi kami. Terima kasih atas dedikasi dan kontribusi Anda dalam menjaga
                                kelancaran sistem ini.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">{{ $sellerCount }}</h5>
                                    <p class="card-text">Sellers</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Sellers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-box float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">{{ $countProducts }}</h5>
                                    <p class="card-text">Products</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Products</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">{{ $buyerCount }}</h5>
                                    <p class="card-text">Buyer</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Buyer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
