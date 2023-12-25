@extends('seller.layouts.layoutAdmin')
@section('title', 'Product')
@section('content')
    <div id="layoutSidenav_content">
        <main class="p-4">
            <br>
            <div class="main-pages">
                <div class="container-fluid">
                    <div class="row g-2 mb-3">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3">
                                <h4>Hello </h4>
                                <hr>
                                <div class="container text-align">
                                    <div class="row">
                                        <div class="col">
                                            <table>
                                                <tr>
                                                    <td class="pe-5">
                                                        <p>Nama Lengkap</p>
                                                    </td>
                                                    <td class="pe-3">
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ Auth::user()->name }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>NPM</p>
                                                    </td>
                                                    <td class="pe-3">
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ Auth::user()->npm }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>No Telpon</p>
                                                    </td>
                                                    <td>
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ Auth::user()->numberPhone }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Role</p>
                                                    </td>
                                                    <td>
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ Auth::user()->role }}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
