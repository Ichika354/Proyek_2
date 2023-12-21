@extends('seller.layouts.layoutAdmin')
@section('title', 'Create Produk')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>TAMBAH PRODUK</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between ps-5 pt-1 flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Product.Store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <table>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="produk">Nama Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="text" placeholder="isi produk..."
                                                    name="produkName" id="produk" required class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="kategori">Kategori</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="id_category" id="kategori">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id_category }}">
                                                            {{ $category->category }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="harga">Harga Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="number" placeholder="isi harga..."
                                                    name="price" id="harga" required class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="foto">Foto</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <input type="file" name="photo" id="foto" class="form-control"
                                                    accept="image/*">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="stok">Ketersediaan Stok</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="number" name="stock" id="stok"
                                                    class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="detail">Detail</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <textarea name="detail" id="detail" cols="30" rows="10" class="form-control" required></textarea>
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
