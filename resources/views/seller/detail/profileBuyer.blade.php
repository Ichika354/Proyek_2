@extends('seller.layouts.layoutAdmin')
@section('title', 'Profile')
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
                                                <tr>
                                                    <td>
                                                        <p>Alamat</p>
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            </table>
                                            @if ($addresses->count() > 1)
                                                <table>
                                                    @foreach ($addresses as $address)
                                                        <tr>
                                                            <td class="pe-3">{{ $loop->iteration }}</td>
                                                            <td class="pe-3">{{ $address->address }}</td>
                                                            <td class="pe-3">
                                                                <a href="" class="text-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            </td>
                                                            <td><a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            @else
                                                <p>Belum Memiliki Alamat</p>
                                            @endif
                                            <div class="ms-auto mt-3">
                                                <a href="{{ route('Address') }}" class="btn btn-primary">Tambah Alamat</a>
                                            </div>
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

