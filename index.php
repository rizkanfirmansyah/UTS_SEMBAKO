<?php include 'template/head.php' ?>

<?php

include 'koneksi.php';

$barang = mysqli_query($conn, "SELECT * FROM barang JOIN supplier ON supplier.id_supplier=barang.id_supplier JOIN type_barang ON type_id=id_type"); ?>

<section id="hero-animated" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <img src="assets  /img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
    <h2>Selamat Datang <span>Di Toko Sembako</span></h2>
    <p>Tugas UTS Membuat CRUD dan Sistem Login</p>
    <div class="d-flex">
      <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
</section>

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4 justify-content-center">

        <?php if (!empty($_SESSION['status'])) : ?>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="input-mhs.php" class="stretched-link">Input Data</a></h4>
              <p>Input Data Barang, Pelanggan, Suplier Dan Harga Barang.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="Input.php" class="stretched-link">Laporan</a></h4>
              <p>Laporan Mengenai Daftar Barang.</p>
            </div>
          </div>
      </div>
    <?php endif; ?>

    </div>
  </section>
  <!-- End Featured Services Section -->

  <!-- Table -->
  <secttion class="table" id="table">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-6 ">
          <h1>Daftar Barang Hari Ini</h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Tipe Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto</th>
              </tr>
            </thead>
            <tbody>

              <?php $no = 1; ?>
              <?php foreach ($barang as $data) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nama_barang'] ?></td>
                  <td><?= $data['nama_supplier'] ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['stok'] ?></td>
                  <td><?= $data['harga'] ?></td>
                  <td><img width="100" height="100" src="images/<?= $data['foto'] ?>" alt="Gambar"></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </secttion>
  <?php include 'template/foot.php' ?>