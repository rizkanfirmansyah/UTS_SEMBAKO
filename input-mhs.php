<?php include 'template/head.php'; ?>

<?php

include 'koneksi.php';

$type = mysqli_query($conn, "SELECT * FROM type_barang");
$supplier = mysqli_query($conn, "SELECT * FROM supplier");

$barang = mysqli_query($conn, "SELECT * FROM barang JOIN supplier ON supplier.id_supplier=barang.id_supplier JOIN type_barang ON type_id=id_type");

// var_dump($supplier);
// var_dump($data->fetch_all());

// var_dump($_GET['npm']);

?>


<section id="mhs" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h2>Data <span>Sembako.</span></h2>
  </div>
</section>

<!-- Table -->
<section class="table">
  <div class="container">
    <div class="card">
      <div class="card-header row">
        <div class="col-xl-3">
          <h3>Tabel Data Sembako</h3>
        </div>
        <div class="col-xl-9 text-end">
          <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Input Data Sembako
            </a>
            <button class="btn btn-secondary" onclick="window.location.href = 'print.php'" type="button">
              Cetak Data
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body text-start">
              <form action="action/add-barang.php" enctype="multipart/form-data" method="post">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Nama Barang</label>
                      <input type="text" class="form-control" name="nama" placeholder="nama">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Tipe Barang</label>
                      <select name="type_id" id="type_id" class="form-control">
                        <option value disabled selected>== pilih tipe barang ==</option>
                        <?php foreach ($type as $tipe) : ?>
                          <option value="<?= $tipe['id_type'] ?>"><?= $tipe['nama'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Supplier</label>
                      <select name="id_supplier" id="id_supplier" class="form-control">
                        <option value disabled selected>== Pilih Supplier ==</option>
                        <?php foreach ($supplier as $data) : ?>
                          <option value="<?= $data['id_supplier'] ?>"><?= $data['nama_supplier'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Harga Barang</label>
                      <input type="number" class="form-control" name="harga" placeholder="harga">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Stok Barang</label>
                      <input type="number" class="form-control" name="stok" placeholder="stok">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label text-black">Photo Barang</label>
                      <input type="file" class="form-control" name="foto" placeholder="foto">
                    </div>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-primary" type="submit">Tambah Data</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
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
                <th scope="col">Aksi</th>
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
                  <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    </secttion>

    <section id="dosen" class="hero-animated d-flex align-items-center">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <h2>Data <span>Dosen.</span></h2>
      </div>
    </section>

    <!-- Table -->
    <section class="table">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">1</th>
                  <th scope="col">KD Dosen</th>
                  <th scope="col">Nama Dosen</th>
                  <th scope="col">Email</th>
                  <th scope="col">No. Handphone</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td>Test</td>
                  <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </secttion>

      <section id="mk" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
          <h2>Data <span>Mata Kuliah.</span></h2>
        </div>
      </section>

      <!-- Table -->
      <section class="table">
        <div class="container">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">1</th>
                    <th scope="col">KD Mata Kuliah</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td><a href="">Edit</a> || <a href="">Hapus</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </secttion>



        <?php include 'template/foot.php'; ?>