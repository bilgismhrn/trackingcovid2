<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Lumia - v2.2.1
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1><a href="index.html">TrackingCovid</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="http://127.0.0.1:8000/">Beranda</a></li>
                    <li><a href="#provinsi">Kasus Provinsi</a></li>
                    <li><a href="#global">Kasus Global</a></li>

                    <li><a href="#contact">Kontak</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Stay Safe. <span>Stay Home.</span></h1>
            <h2>Covid-19</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl">Positif</i></div>
                            <h4><a href="">{{ $positif }}</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx">Sembuh</i></div>
                            <h4><a href="">{{ $sembuh }}</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx">Meninggal</i></div>
                            <h4><a href="">{{ $meninggal }}</a></h4>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-world">global</i></div>
                            <h4><a href=""><?php echo $getglobal['value']; ?></a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End What We Do Section -->


        <!-- ======== Table section Lokal ======== -->
        <section id="provinsi" class="provinsi">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Indonesia</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Provinsi</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp

                                @foreach ($tampil as $tmp)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $no++ }}</center>
                                        </th>
                                        <td>
                                            <center>{{ $tmp->nama_provinsi }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($tmp->jumlah_positif) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($tmp->jumlah_sembuh) }}</center>
                                        </td>
                                        <td>
                                            <center>{{ number_format($tmp->jumlah_meninggal) }}</center>
                                        </td>
                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table Section Global ======= -->

        <!-- ======== Table Section Global ======= -->
        <section id="global" class="global">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Data Kasus Dunia</h2>
                </div>

                <div class="row content" data-aos="fade-up">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                        <table class="table table-bordered table-striped mb-0 " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Negara</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Positif</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Sembuh</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah Meninggal</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($globall as $data)
                                    <tr>
                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo $data['attributes']['Country_Region']; ?></td>
                                        <td> <?php echo number_format($data['attributes']['Confirmed']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Recovered']);
                                            ?></td>
                                        <td><?php echo number_format($data['attributes']['Deaths']); ?></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- ======== End Table Section Global ======= -->


        <!-- ======= Skills Section ======= -->
        <!-- End Skills Section -->

        <!-- ======= Counts Section ======= -->
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>

                </div>

                <div class="row mt-5 justify-content-center">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="icofont-google-map"></i>
                                    <h4>Lokasi:</h4>
                                    <p>Jl.Cibaduyut Raya, Cangkuang kulon,
                                        Kec.Dayeuhkolot, Kab Bandung, jawa barat
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>smkassalaam@gmail.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-phone"></i>
                                    <h4>Telepon:</h4>
                                    <p>081292690812</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>TrackingCovid</h3>
                        <p>
                            Jl.Cibaduyut Raya<br>
                            <strong>Telepon:</strong> 081292690812<br>
                            <strong>Email:</strong> smkassalaam@gmail.com<br>
                        </p>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pilihan Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://127.0.0.1:8000/">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#provinsi">Kasus Provinsi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#global">Kasus Global</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#kontak">Kontak</a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
