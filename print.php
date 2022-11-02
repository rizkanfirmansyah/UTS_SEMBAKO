<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include 'koneksi.php';


$barang = mysqli_query($conn, "SELECT * FROM barang JOIN supplier ON supplier.id_supplier=barang.id_supplier JOIN type_barang ON type_id=id_type");

?>

<body>

    <table class="table table-bordered table-striped" border="1">
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

</body>

<script>
    window.print();
</script>

</html>