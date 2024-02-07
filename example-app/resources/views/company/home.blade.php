@include('company.head')

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/store.png" alt>
            <h1 style="color:#84726c">Aya<span>.</span></h1>
        </a>

        @include('company.navbar')

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2 style="color:#84726c">Welcome to <span>Aya</span></h2>
                <p style="color:#84726c">Penyedia jasa terkemuka di bidang ritel. Temukan berbagai penawaran menarik kami dan nikmati pengalaman belanja yang luar biasa hanya di Aya.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started" style="color:#84726c" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</a>
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
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <td class="order_now"><a href="#account" class="scroll"><button>Order Now</button></a></td>
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
                <img src={{asset('hero-img-3.jpg')}} class="img-fluid" alt data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>
</section>
@extends('company.footer')
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>

<script src="/main.js"></script>