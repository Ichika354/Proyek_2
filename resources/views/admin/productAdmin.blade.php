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
                                        <th scope="col">Penjual</th>
                                    </tr>
                                    <!-- Loop untuk menampilkan produk -->
                                    @foreach ($products as $index => $product)
                                    <tr>
                                        <!-- Kolom-kolom Produk -->
                                        <td scope="row">{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('img/produk/'.$product->photo) }}" alt="Product Image" width="50" height="40">
                                        </td>
                                        <td>{{ $product->produkName }}</td>
                                        <td>{{ $product->category->categoryAdmin->category }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->user->name }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                
                                <!-- Tombol untuk menambah produk -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
