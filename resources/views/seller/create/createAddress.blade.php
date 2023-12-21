@extends('seller.layouts.layoutAdmin')
@section('title', 'Add Adress')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>ADD ADDRESS</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between ps-5 pt-1 flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Add.Address') }}" method="POST">
                                    @csrf
                                    <table>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="produk">Alamat</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary">Tambah
                                                </button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
