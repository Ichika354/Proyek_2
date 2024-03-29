@extends('seller.layouts.layoutAdmin')
@section('title', 'Detail Order')
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
                                        <th scope="col">Id Order</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Tanggal Pemesanan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    <!-- Loop untuk menampilkan produk -->
                                    @foreach ($orders as $order)
                                        <tr>
                                            <!-- Kolom-kolom Order -->
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $order->id_order }}</td>
                                            <td>{{ $order->product->produkName }}</td>
                                            <td>{{ $order->qty }}</td>
                                            <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>
                                                {{ $order->transaction->status }}
                                            </td>
                                            <td>
                                                <a href="{{ route('Detail.Order.Seller.Status',$order->transaction->id_transaction) }}" class="btn btn-primary">Detail</a>
                                            </td>
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
