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

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, consectetur corrupti,
                                suscipit similique accusantium fugit ut dicta harum dolores, aliquam corporis eligendi
                                laborum reiciendis quasi ratione perferendis consequatur unde adipisci.</p>

                            <div class="row g-5 mb-3 d-flex">
                                @foreach ($categories as $category)
                                    <div class="col-4">
                                        <div class="card_card">
                                            <i class="{{ $category->icon }} bowl"></i>
                                            <div class="card__content">
                                                <p class="card__title">{{ $category->category }}</p>
                                                <a href="{{ route('Product.By.Category', $category->id_category_admin) }}"
                                                    class="btn btn-primary mt-3">Detail Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
