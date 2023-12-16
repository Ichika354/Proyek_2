@extends('seller.layouts.layoutAdmin')
@section('title', 'Kategori')
@section('content')
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>DATA KATEGORI</h1>
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
                            <div class="table mt-5">
                                <table class="table ms-0">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $category->category }}</td>
                                            <td>
                                                <a class="btn btn-secondary" href="{{ route('Category.Detail',$category->id_category) }}">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <a href="{{ route('Category.Add') }}" class="btn btn-primary">INPUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
