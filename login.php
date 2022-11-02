<?php include 'template/head.php' ?>

<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
        <h2>Welcome to <span>Sembakoin</span></h2>
        <form action="forms/contact.php" method="post" class="row">
            <div class="form-group mt-3">
                <input type="text" class="form-control py-3 px-4" name="username" id="username" placeholder="username" required>
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control py-3 px-4" name="password" id="password" placeholder="password" required>
            </div>
            <div class="text-center"><button class="btn btn-primary mt-5" type="submit">Login</button></div>
        </form>
    </div>
</section>

<!-- ======= Footer ======= -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>