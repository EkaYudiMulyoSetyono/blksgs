<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BLK Singosari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/peserta/') ?>img/favicon.png" rel="icon">
  <link href="<?php echo base_url('assets/peserta/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/peserta/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/peserta/') ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo base_url()?>">UTP Balai Latihan Kerja</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url('assets/peserta/') ?>img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?php echo base_url()?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#popular-courses">Jurusan</a></li>
          <li><a href="#contact">Daftar Sekarang</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?php echo site_url('login')?>" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo base_url('assets/peserta/') ?>img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Apa itu Balai Latihan Kerja ?</h3>
            <p>BLK adalah prasarana dan sarana tempat pelatihan untuk mendapatkan keterampilan
              atau yang ingin mendalami keahlian dibidangnya masing-masing sebelum turun ke dunia kerja.</p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Peserta</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Jurusan</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Jurusan</h2>
          <p>Jurusan yang ditawarkan</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php foreach ($jurusanterbukas as $jt) : 
                $jurusan = "";
                $descibe = "";
                foreach ($jurusans as $j){
                    if($j['id'] == $jt['id_jurusan']) {
                        $jurusan = $j['jurusan'];
                        $descibe = $j['deskripsi'];
                    }
                }
        ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="course-item">
              <img src="<?php echo base_url('assets/peserta/') ?>img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo $jurusan?></h4>
                </div>

                <h3><?php echo $jurusan?></h3>
                <p><?php echo $descibe?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
        <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Daftarkan diri anda sekarang</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="<?php echo site_url('login/register')?>" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="KTP" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group mt-3">
                <select name="jk" id="jk" class="form-control">
                  <option value="" disabled selected>Pilih Jenis Kelamin</option>
                  <option value="laki-laki">Laki - Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon" required>
              </div>
              <div class="row">
                <div class="form-group col-md-6 mt-3">
                  <label for="up_ktp">Upload KTP</label>
                  <input type="file" class="form-control-file" id="up_ktp" name="up_ktp">
                </div>
                <div class="form-group col-md-6 mt-3">
                  <label for="up_ijazah">Upload Ijazah</label>
                  <input type="file" class="form-control-file" id="up_ijazah" name="up_ijazah">
                </div>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Akun mu sudah berhasil dibuat!</div>
              </div>
              <div class="text-center"><button type="submit">Daftar Sekarang</button></div>
            </form>

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
            <h3>Mentor</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/peserta/') ?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('assets/peserta/') ?>vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('assets/peserta/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/peserta/') ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('assets/peserta/') ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/peserta/') ?>js/main.js"></script>

</body>

</html>