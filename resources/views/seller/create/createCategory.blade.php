@extends('seller.layouts.layoutAdmin')
@section('title', 'Create Category')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>TAMBAH KATEGORI</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between  flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Category.Store') }}" method="POST">
                                    @csrf   
                                    <table>
                                        <tr>
                                            <td class="p-5"><label for="nama">Nama Kategori</label></td>
                                            <td class="pe-3">:</td>
                                            <!-- <td><input type="text" placeholder="isi kategori..." name="nama" id="nama" require class="form-control"></td> -->
                                            <td>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="category" id="nama">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Makanan">Makanan</option>
                                                    <option value="Minuman">Minuman</option>
                                                    <option value="Pakaian">Pakaian</option>
                                                    <option value="Elektronik">Elektronik</option>
                                                    <option value="Buku">Buku</option>
                                                </select>
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
