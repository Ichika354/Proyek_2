
<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
                <div class="d-block bg-white rounded shadow p-3">
                    <h2>Selamat Datang Admin</h2>
                    <p>Selamat datang, Admin! Anda telah berhasil masuk ke dalam sistem dengan level akses admin. Semoga
                        Anda memiliki pengalaman yang menyenangkan dan sukses dalam menjalankan tugas-tugas
                        administratif Anda. Jika Anda memerlukan bantuan atau informasi lebih lanjut, jangan ragu untuk
                        menghubungi kami. Terima kasih atas dedikasi dan kontribusi Anda dalam menjaga kelancaran sistem
                        ini.</p>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-2">
                        <i class="fa fa-bars float-start fa-3x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <h5 class="card-title">3</h5>
                            <p class="card-text">Kategori</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Kategori</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-2">
                        <i class="fa-solid fa-box float-start fa-3x py-auto"></i>
                        <div class="card-body text-end">
                            <h5 class="card-title">1</h5>
                            <p class="card-text">Produk</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Produk</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-2">
                        <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                        <div class="card-body text-end">
                            <h5 class="card-title">2</h5>
                            <p class="card-text">Penjual</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Penjual</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="col-12 col-lg-6 w-100">
                <div class="d-block rounded shadow bg-white p-3">
                    <div class="cust-table">
                        <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                            <h1>Penjual Terbaru</h1>
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
                                    <th scope="col">Nama Penjual</th>
                                </tr>
                                {{-- <?php $i = 1; ?>
                                <?php foreach($queryPenjual as $penjual) : ?>
                                <?php $i++; ?>
                                <?php endforeach; ?> --}}
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Saya</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
