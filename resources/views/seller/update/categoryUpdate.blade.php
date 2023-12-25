@extends('seller.layouts.layoutAdmin')
@section('title', 'Category Update')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>UBAH KATEGORI</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between  flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Category.Update', $category->id_category) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <table>
                                        <tr>
                                            <td class="p-5"><label for="nama">Nama Kategori</label></td>
                                            <td class="pe-3">:</td>
                                            <!-- <td><input type="text" placeholder="isi kategori..." name="nama" id="nama" require class="form-control"></td> -->
                                            <td>
                                                <select class="form-select" name="category" id="category"
                                                    class="select-form">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id_category_admin }}">{{ $category->category }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary">UBAH
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
