@extends('seller.layouts.layoutAdmin')
@section('title', 'Order')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100 mb-5">
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
                                            <table>
                                                <tr>
                                                    <td class="p-2">
                                                        <p class="card-text">Harga</p>
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            class="form-control ms-2"
                                                            value="Rp. {{ number_format($products->price * (10 / 100) + $products->price, 0, ',', '.') }}"
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
                                                            value="{{ $order->qty }}" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2">
                                                        <p class="card-text">Total</p>
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td class="p-2">
                                                        <input type="text" name="" class="form-control"
                                                            value="Rp. {{ number_format($order->total_price, 0, ',', '.') }}" disabled>
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
                                                        <input type="text" name="" class="form-control"
                                                            value="{{ $order->addres }}" disabled>
                                                    </td>
                                                </tr>
                                            </table>
                                            <button class="btn btn-primary" id="pay-button">Checkout</button>
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
@section('script')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                    location.href="{{ route('home') }}";
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                    location.href="{{ route('home') }}";

                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                    location.href="{{ route('home') }}";
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
@endsection
