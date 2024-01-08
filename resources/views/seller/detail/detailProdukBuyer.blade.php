@extends('seller.layouts.layoutAdmin')
@section('title', 'Detail Produk')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100 mb-5">
                                <h1>DETAIL DATA PRODUK</h1>
                            </div>
                            <!-- Tampilan untuk non-Seller -->
                            
                            <!-- Tampilan Produk untuk non-Seller -->
                            <div class="row g-5 mb-3 d-flex">
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('img/produk/' . $products->photo) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $products->produkName }}</h5>
                                            <table>
                                                <tr>
                                                    <td class="p-2">
                                                        <p class="card-text">Harga
                                                        </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <p class="card-text">
                                                           Rp. {{ number_format($products->price*(20/100)+$products->price, 0, ',', '.') }}
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">
                                                        <p class="card-text">Stok</p>
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td class="p-2">
                                                        <p class="card-text">{{ $products->stock }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">
                                                        <p class="card-text">Kategori</p>
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <p class="card-text">{{ $products->category->categoryAdmin->category }}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <p class="card-text p-2">{{ $products->detail }}</p>
                                            <a href="{{ route('Order.Views',$products->id_produk) }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
