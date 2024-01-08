@extends('seller.layouts.layoutAdmin')
@section('title', 'Detail Pesanan')
<style>
    .order-details {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .product img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .atribut-detail {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .value {
        text-align: right;
    }

    .total {
        margin-top: 20px;
        text-align: right;
    }
</style>
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100 mb-5">
                                <h1 class="text-3xl font-bold underline">DETAIL PESANAN PRODUK</h1>
                            </div>
                            <div class="order-details">
                                @if ($details->isEmpty())
                                    <div class="col-12">
                                        <p>Tidak ada transaksi.</p>
                                    </div>
                                @else
                                    @foreach ($details as $detail)
                                        <div class="product">
                                            <h3>{{ $detail->product->produkName }}</h3>
                                            <img src="{{ asset('img/produk/' . $detail->product->photo) }}"
                                            alt="Foto Produk">
                                            <div class="atribut-detail">
                                                <div class="">
                                                    <p>Id Order</p>
                                                    <p>Jumlah</p>
                                                    <p>Total</p>
                                                    <p>Penjual</p>
                                                </div>
                                                <div class="value">
                                                    <p>{{ $detail->id_order }}</p>
                                                    <p>{{ $detail->qty }}</p>
                                                    <p>Rp.{{ number_format($detail->total_price, 2, ',', '.') }}</p>
                                                    <p>{{ $detail->product->user->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="row g-5 mb-3 d-flex justify-content-around align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- @if ($details->isEmpty())
            <div class="col-12">
                <p>Tidak ada transaksi.</p>
            </div>
        @else
            @foreach ($details as $detail)
                <div class="col-2 col-sm-8 col-md-8 col-lg-8">
                    <div class="card mb-3" style="max-width: 1040px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/produk/' . $detail->product->photo) }}"
                                    class="img-fluid rounded-start" alt="Product Image">
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $detail->product->produkName }}</h5>
                                    <p class="card-text">Id Order :</p>
                                    <p class="card-text">{{ $detail->id_order }}</p>
                                    <hr>
                                    <p class="card-text">Jumlah : </p>
                                    <p class="card-text">{{ $detail->qty }}</p>
                                    <hr>
                                    <p class="card-text">Total Harga :</p>
                                    <p class="card-text">
                                        Rp.{{ number_format($detail->total_price, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
 --}}
