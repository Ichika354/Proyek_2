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
                                <h1>DATA PRODUK</h1>
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
                                <!-- Tampilan untuk Seller -->
                                <div class="table mt-5">
                                    <!-- Tabel Produk untuk Seller -->
                                    <table class="table ms-0">
                                        <!-- Header Tabel -->
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                        <!-- Loop untuk menampilkan produk -->
                                        @foreach ($products as $product)
                                            <tr>
                                                <!-- Kolom-kolom Produk -->
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('img/produk/' . $product->photo) }}"
                                                        alt="Product Image" width="50">
                                                </td>
                                                <td>{{ $product->produkName }}</td>
                                                <td>{{ $product->category->category }}</td>
                                                <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('Products.Edit.Views', $product->id_produk) }}"
                                                        class="btn btn-warning me-2">Edit</a>

                                                    <!-- Form Delete -->
                                                    <form action="{{ route('Products.Destroy', $product->id_produk) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- Tombol Delete -->
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Yakin mau hapus?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <!-- Tombol untuk menambah produk -->
                                    <a href="{{ route('Product.Add') }}" class="btn btn-primary">INPUT</a>
                                </div>
                            @else
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
                                    @foreach ($products as $product)
                                        <div class="col-4">
                                            <div class="card_card">
                                                <img src="{{ asset('img/produk/' . $product->photo) }}" alt="">
                                                <!-- Konten Kartu -->
                                                <div class="card__content">
                                                    <!-- Judul dan Deskripsi Produk -->
                                                    <p class="card__title">{{ $product->produkName }}</p>
                                                    <p class="card__description">
                                                        Kategori : {{ $product->category->category }}
                                                    </p>
                                                    <a href="{{ route('Product.Buyer', $product->id_produk) }}"
                                                        class="btn btn-primary mt-3">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
