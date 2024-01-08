@extends('seller.layouts.layoutAdmin')
@section('title', 'Detail Status')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100 mb-5">
                                <h1>DETAIL ORDER</h1>
                            </div>
                            <!-- Tampilan untuk non-Seller -->

                            <!-- Tampilan Produk untuk non-Seller -->
                            <div class="row g-5 mb-3 d-flex">
                                <div class="col-4">
                                    <div class="card mb-3">
                                        <img src="{{ asset('img/bukti/' . $status->transaction_proof) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <div class="card-text">Total Harga</div>
                                            <div class="card-text">Rp.
                                                {{ number_format($status->order->total_price, 0, ',', '.') }}</div>
                                            <hr>
                                            <form action="{{ route('Update.Order.Seller.Status', $status->id_transaction) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="card-text">Status</div>
                                                <select name="status" id="status" class="form-select mb-2">
                                                    <option value="Unpaid"
                                                        {{ $status->status == 'Unpaid' ? 'selected' : '' }}>Unpaid
                                                    </option>
                                                    <option value="Paid"
                                                        {{ $status->status == 'Paid' ? 'selected' : '' }}>Paid
                                                    </option>
                                                </select>
                                                <button type="submit" class="btn btn-primary">Update Status</button>
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
