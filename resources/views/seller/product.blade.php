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
                            <div class="table mt-5">
                                <table class="table ms-0">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td><img src="" width="100" alt=""></td>
                                            <td>{{ $product->produkName }}</td>
                                            <td>{{ $product->category->category }}</td>
                                            <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('Products.Edit.Views', $product->id_produk) }}"
                                                    class="btn btn-warning me-2">Edit</a>

                                                <form action="{{ route('Products.Destroy', $product->id_produk) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Yakin mau hapus?')">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                                <a href="{{ route('Product.Add') }}" class="btn btn-primary">INPUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
