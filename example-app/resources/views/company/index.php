<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home</title>
    <meta content name="description">
    <meta content name="keywords">

    <!-- Favicons -->
    <link href="assets/img/store.png" rel="icon">
    <link href="assets/img/store.png" rel="store-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

  </head>

  <body>
    <header id="header" class="header d-flex align-items-center">

      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/store.png" alt>
          <h1 style="color:#84726c">Aya<span>.</span></h1>
        </a>
        
        @extends('navbar')

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2 style="color:#84726c">Welcome to <span>Aya</span></h2>
            <p style="color:#84726c">Penyedia jasa terkemuka di bidang ritel. Temukan berbagai penawaran menarik kami dan nikmati pengalaman belanja yang luar biasa hanya di Aya.</p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started" style="color:#84726c"
                data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</a>
              <section id="popup" class="popup">
                <div class="form-order-now">
                  <h2>Order Form</h2>
                  <form>
                    <label for="itemName">Item Name:</label>
                    <input type="text" id="itemName" name="itemName" required><br>

                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required><br>

                    <button type="button" onclick="submitOrder()">Submit Order</button>
                    <button type="button" onclick="hidePopup()">Cancel</button>
                  </form>
                </div>
              </section>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="plans_table">

                        <table width="100%" cellspacing="0" class="compare_plan">
                          <thead>
                            <tr>
                              <th class="plans-list">
                                <h3>Promo Minggu Ini</h3>
                              </th>
                              <th class="plans-list">
                                <h3>Harga Normal</h3>
                              </th>
                              <th class="plans-list">
                                <h3>Harga Diskon</h3>
                              </th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <td> </td>
                            </br>
                            <td class="order_now"><a href="#account"
                                class="scroll"><button>Order Now</button></a></td>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td class="plan_list_title">Choki-Choki Sekarung</td>
                            <td class="price_body">Rp. 70.000</td>
                            <td class="price_body">Rp. 50.000</td>
                          </tr>
                          <tr>
                            <td class="plan_list_title">Yakult Seliter</td>
                            <td class="price_body">Rp. 100.000</td>
                            <td class="price_body">Rp. 10.000</td>
                          </tr>
                          <tr>
                            <td class="plan_list_title">Cornetto Seember</td>
                            <td class="price_body">Rp. 67.000</td>
                            <td class="price_body">Rp. 36.000</td>
                          </tr>
                          <tr>
                            <td class="plan_list_title">Kacang Koro Setruck</td>
                            <td class="price_body">Rp. 250.000</td>
                            <td class="price_body">Rp. 100.000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img-3.jpg" class="img-fluid" alt
            data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <footer id="footer" class="footer" style="color:#84726c">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span style="color:#84726c">Aya</span>
            </a>
            <p style="color:#84726c">Jasa Ritel yang awalnya dibuka coba-coba dan modal
            Bismillah, sekarang Alhamdulillah sukses hehe</p>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter" style="color:#84726c"><i
                  class="bi bi-twitter"></i></a>
              <a href="#" class="facebook" style="color:#84726c"><i
                  class="bi bi-facebook"></i></a>
              <a href="#" class="instagram" style="color:#84726c"><i
                  class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin" style="color:#84726c"><i
                  class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="color:#84726c">Our Branch</h4>
            <ul>
              <li><a href="#" style="color:#84726c">Jakarta</a></li>
              <li><a href="#" style="color:#84726c">Jogja</a></li>
              <li><a href="#" style="color:#84726c">Bandung</a></li>
              <li><a href="#" style="color:#84726c">Makassar</a></li>
              <li><a href="#" style="color:#84726c">Surabaya</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="color:#84726c">Our Services</h4>
            <ul>
              <li><a href="#" style="color:#84726c">Supermarket</a></li>
              <li><a href="#" style="color:#84726c">Minimarket</a></li>
              <li><a href="#" style="color:#84726c">Marketmarket</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4 style="color:#84726c">Contact Us</h4>
            <p style="color:#84726c">
              JL. Jalan ke Bandung <br>
              Jawa Barat 535022<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 899 1234 8765<br>
              <strong>Email:</strong> kasihpaham@abangkuh.com<br>
            </p>

          </div>

        </div>
      </div>

      <div class="container mt-4">
        <div class="cr">
          &copy; <strong><span>2020 Hacktiv8 Workshop Program Rimdani Alya
              Annisa</span></strong>.
        </div>
      </div>

    </footer>
    <a href="#"
      class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

  </body>

</html>