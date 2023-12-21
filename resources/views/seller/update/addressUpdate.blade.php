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
                                <h1>EDIT ADDRESS</h1>
                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between ps-5 pt-1 flex-wrap gap-5 title-table w-100">
                                <form action="{{ route('Edit.Address.Put', $address->id_address) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <table>
                                        <tr>
                                            <td class="pe-4 pb-2"><label for="provinsi">Provinsi</label></td>
                                            <td class="pe-3 pb-2">:</td>
                                            <td class="pb-2">
                                                <select name="province_id" id="provinsi" class="form-select">
                                                    <option selected disabled>Pilih Provinsi</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province->id }}"
                                                            @if ($province->id == $address->province_id) selected @endif>
                                                            {{ $province->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-2"><label for="kabupaten">Kota/Kabupaten</label></td>
                                            <td class="pe-3 pb-2">:</td>
                                            <td class="pb-2">
                                                <select name="regency_id" id="kabupaten" class="form-select">
                                                    <option selected disabled>Pilih Kota / Kabupaten</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-2"><label for="kecamatan">Kecamatan</label></td>
                                            <td class="pe-3 pb-2">:</td>
                                            <td class="pb-2">
                                                <select name="district_id" id="kecamatan" class="form-select">
                                                    <option selected disabled>Pilih Kecamatan</option>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-2"><label for="desa">Desa</label></td>
                                            <td class="pe-3 pb-2">:</td>
                                            <td class="pb-2">
                                                <select name="village_id" id="desa" class="form-select">
                                                    <option selected disabled>Pilih Desa</option>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-2"><label for="patokan">Patokan</label></td>
                                            <td class="pe-3 pb-2">:</td>
                                            <td class="pb-2">
                                                <input type="text" class="form-control" name="patokan" value="{{ $address->patokan }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary">Edit
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
