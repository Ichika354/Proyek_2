@extends('seller.layouts.layoutAdmin')
@section('title', 'Update Produk')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>UPDATE PRODUK</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between ps-5 pt-1 flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Products.Update', $product->id_produk) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <table>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="produk">Nama Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="text" placeholder="isi produk..."
                                                    name="produkName" id="produk" required class="form-control"
                                                    value="{{ $product->produkName }}"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="kategori">Kategori</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="id_category" id="kategori">
                                                    <option selected disabled>Choose a category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->categoryAdmin->id_category_admin }}"
                                                            {{ $product->category->categoryAdmin->id_category_admin == $category->categoryAdmin->id_category_admin ? 'selected' : '' }}>
                                                            {{ $category->categoryAdmin->category }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="harga">Harga Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="number" placeholder="isi harga..."
                                                    name="price" id="harga" required class="form-control"
                                                    value="{{ $product->price }}"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="photo">Foto</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4 d-flex gap-3">
                                                <input type="file" name="photo" id="photo" class="form-control"
                                                    accept="image/*">
                                                <img src="{{ asset('img/produk/' . $product->photo) }}" width="50"
                                                    alt="" height="30" class="mt-2">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="vidio">Vidio</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4 d-flex gap-3">
                                                <input type="file" name="vidio" id="vidio" class="form-control"
                                                    accept="video/*">
                                                {{-- <img src="{{ asset('img/produk/' . $product->photo) }}" width="50"
                                                    alt="" height="30" class="mt-2"> --}}
                                                    <video src="{{ asset('img/produk/' . $product->vidio) }} }}" width="50" height="30"></video>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="stok">Ketersediaan Stok</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input type="number" name="stock" id="stok"
                                                    class="form-control" required value="{{ $product->stock }}"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="detail">Detail</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <textarea name="detail" id="detail" cols="30" rows="10" class="form-control" required>
                                                    {{ $product->detail }}
                                                </textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary">Ubah
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
