@extends('seller.layouts.layoutAdmin')
@section('title', 'Order')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5   w-100 mb-5">
                                <h1>CHECKOUT PRODUK</h1>
                            </div>
                            <!-- Tampilan untuk non-Seller -->

                            <!-- Tampilan Produk untuk non-Seller -->
                            <div class="row g-5 mb-3 d-flex">
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('img/produk/' . $products->photo) }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <form action="{{ route('Checkout') }}" method="POST">
                                                @csrf
                                                <table>
                                                    <input type="hidden" name="harga" value="{{ $products->price }}">
                                                    <input type="hidden" name="stok" value="{{ $products->stock }}">
                                                    <input type="hidden" name="id_produk"
                                                        value="{{ $products->id_produk }}">
                                                    <input type="hidden" name="id_seller" value="{{ $products->id_user }}">
                                                    <tr>
                                                        <td class="p-2">
                                                            <p class="card-text">Harga</p>
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control ms-2"
                                                                value="Rp. {{ number_format($products->price * (20 / 100) + $products->price, 0, ',', '.') }}"
                                                                disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">
                                                            <p class="card-text">Jumlah</p>
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td class="p-2">
                                                            <input type="text" name="jumlah" class="form-control"
                                                                required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-2">
                                                            <p class="card-text">Alamat</p>
                                                        </td>
                                                        <td>
                                                            :
                                                        </td>
                                                        <td class="p-2">
                                                            <select class="form-select" aria-label=".form-select-sm example"
                                                                name="id_address" required>
                                                                <option selected disabled>Pilih Alamat</option>
                                                                @foreach ($addresses as $address)
                                                                    <option value="{{ $address->id_address }}">
                                                                        {{ $address->provinsi->name }},{{ $address->kabupaten->name }},
                                                                        {{ $address->kecamatan->name }},{{ $address->desa->name }},
                                                                        {{ $address->patokan }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <button class="btn btn-primary">Beli</button>
                                            </form>
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
{{-- @section('script') --}}
