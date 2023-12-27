@extends('seller.layouts.layoutAdmin')
@section('title', 'Produk')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>Data Produk Kategori {{ $categoryAdmin->category }}</h1>
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
                            <!-- Tampilan untuk non-Seller -->
                            <div class="p">
                                <!-- Paragraf Penjelasan -->
                                <p>
                                    Setiap pembelian di toko kami memberikan kontribusi langsung kepada para wirausaha
                                    yang
                                    berjuang keras. Selain itu, dapatkan kejutan menarik dan diskon khusus setiap
                                    bulannya!

                                    Terima kasih atas dukungan Anda pada para wirausaha lokal. Jangan ragu untuk
                                    menghubungi
                                    kami jika Anda memiliki pertanyaan atau saran. Selamat berbelanja dan menjadi bagian
                                    dari perjalanan kreatif bersama kami! 🚀🌈
                                </p>
                            </div>
                            <!-- Tampilan Produk untuk non-Seller -->
                            <div class="row g-5 mb-3 d-flex">
                                @if ($products->isEmpty())
                                    <div class="col-4">
                                        <div class="card_card">
                                            <p class="card__title">{{ $categoryAdmin->category }}</p>
                                            <!-- Konten Kartu -->
                                            <div class="card__content">
                                                <!-- Judul dan Deskripsi Produk -->
                                                <p class="card__description">
                                                    Kategori Ini Belum Memiliki Produk
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @foreach ($products as $product)
                                        <div class="col-4">
                                            <div class="card_card">
                                                <img src="{{ asset('img/produk/' . $product->photo) }}" alt="">
                                                <!-- Konten Kartu -->
                                                <div class="card__content">
                                                    <!-- Judul dan Deskripsi Produk -->
                                                    <p class="card__title">{{ $product->produkName }}</p>
                                                    <p class="card__description">
                                                        Kategori : {{ $product->category->categoryAdmin->category }}
                                                    </p>
                                                    <a href="{{ route('Product.Buyer', $product->id_produk) }}"
                                                        class="btn btn-primary mt-3">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
