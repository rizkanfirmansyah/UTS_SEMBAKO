<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$type_id = $_POST['type_id'];
$id_supplier = $_POST['id_supplier'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', npm='$npm', alamat='$alamat' where id=$id");
} else {
    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:input-mhs.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 2000000000) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../images/' . $rand . '_' . $filename);

            mysqli_query($conn, "INSERT INTO barang values('', '$type_id', '$id_supplier', '$nama', $harga, $stok, '$xx')");
            header("location:input-mhs.php?alert=berhasil");
        } else {
            header("location:input-mhs.php?alert=gagak_ukuran");
        }
    }
}


header("location:../input-mhs.php");
