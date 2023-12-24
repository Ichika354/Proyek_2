@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5 rounded-circle" src="img/foto.jpeg" alt="..." />
            <!-- Masthead Heading-->
            <p class="masthead-heading text-uppercase mb-0">Selamat datang Pejuang Wirausaha</p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Universitas Logistik & Bisnis Internasional</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center p-5 ">
                <!-- Portfolio Item 1-->

                <div class="col-md-6 col-lg-3 mb-5 ">
                    <div class="book">
                        <a href="">
                            <img src="Images/Produk/kentang.jpeg" alt="Kentang" class="foto">
                        </a>
                        <div class="cover">
                            <p>Kentang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Di sini, kami ingin menginspirasi dan mendukung semangat wirausaha dalam diri Anda.
                        Wirausaha adalah perjalanan penuh tantangan dan peluang, dan kami hadir untuk memberikan informasi,
                        saran, dan sumber daya yang dapat membantu Anda meraih kesuksesan. </p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead"> Melalui halaman ini, kami berkomitmen untuk menyajikan konten yang relevan, inovatif,
                        dan berguna bagi para calon wirausaha, pemilik bisnis, dan para penggiat ekonomi kreatif.</p>
                </div>
            </div>
            <!-- About Section Button-->
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Daftar Sekarang <a
                    href="">di sini</a></h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Yayasan Pendidikan Bhakti Pos Indonesia (YPBPI)
                        <br />
                        Jalan Sariasih No. 54 Sarijadi Bandung, 40151, Jawa Barat Indonesia
                    </p>
                    
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.642562787089!2d107.57490179845192!3d-6.873802873306324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d1b68bb875%3A0xd8fcf5a9e43bd6e4!2sUniversitas%20Logistik%20dan%20Bisnis%20Internasional%20(ULBI)!5e0!3m2!1sid!2sid!4v1703308150206!5m2!1sid!2sid"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
    </div>

@endsection
