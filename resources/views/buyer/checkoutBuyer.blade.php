@extends('seller.layouts.layoutAdmin')
@section('title', 'Checkout')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <form action="{{ route('Transaction') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_seller" value="{{ $order->id_seller }}">
                            <input type="hidden" name="id_order" value="{{ $order->id_order }}">
                            <input type="hidden" name="id_user" value="{{ $order->id_user }}">
                            <div class="cust-table">
                                <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100 mb-5">
                                    <h1 class="text-3xl font-bold underline">CHECKOUT PRODUK</h1>
                                </div>
                                <!-- Tampilan untuk non-Seller -->

                                <!-- Tampilan Produk untuk non-Seller -->
                                <div class="row g-5 mb-3 d-flex justify-content-around align-items-center">
                                    <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('img/produk/' . $products->photo) }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $products->produkName }}</h5>
                                                        <p class="card-text">Harga :</p>
                                                        <p class="card-text">Rp.
                                                            {{ number_format($products->price * (20 / 100) + $products->price, 0, ',', '.') }}
                                                        </p>
                                                        <hr>
                                                        <p class="card-text">Jumlah : </p>
                                                        <p class="card-text">{{ $order->qty }}</p>
                                                        <hr>
                                                        <p class="card-text">Total Harga :</p>
                                                        <p class="card-text">Rp.
                                                            {{ number_format($order->total_price, 0, ',', '.') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                                        <label class="custum-file-upload" for="file">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                                                    <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                                    <g stroke-linejoin="round" stroke-linecap="round"
                                                        id="SVGRepo_tracerCarrier"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path fill=""
                                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                                            clip-rule="evenodd" fill-rule="evenodd">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <span>Klik Untuk Upload Bukti Pembayaran</span>
                                            </div>
                                            <input type="file" id="file" name="transaction_proof" required>
                                        </label>
                                        <h4 class="title-card">Kirim ke Rekening berikut : xxxxxxxx</h4>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
