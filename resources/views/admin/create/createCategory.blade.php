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
                                <form action="{{ route('Category.Store.Admin.Post') }}" method="POST">
                                    @csrf   
                                    <table>
                                        <tr>
                                            <td class="ps-5 pe-3 "><label for="nama" class="mb-3">Nama Kategori</label></td>
                                            <td class="pe-3 "><p class="mb-3">:</p></td>
                                            <!-- <td><input type="text" placeholder="isi kategori..." name="nama" id="nama" require class="form-control"></td> -->
                                            <td>
                                                <input type="text" name="category" class="mb-3 form-control" placeholder="isi kategori...">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-5 pe-3"><label for="icon" class="ps-5 pe-3">Icon</label></td>
                                            <td class="pe-3">:</td>
                                            <!-- <td><input type="text" placeholder="isi kategori..." name="nama" id="nama" require class="form-control"></td> -->
                                            <td>
                                                <input type="text" name="icon" class="form-control" placeholder="isi icon">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary mt-3">Tambah
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
