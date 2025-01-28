<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id_lansia = $_POST['id_lansia'];
    $nik_lansia = $_POST['nik_lansia'];
    $nama_lansia = $_POST['nama_lansia'];
    $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tb_lansia (id_lansia, nik_lansia, nama_lansia, tanggal_lahir, jenis_kelamin, alamat) 
    VALUES ('$id_lansia', '$nik_lansia', '$nama_lansia', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";

    $result = mysqli_query($konek, $query);
    if ($result) {
            echo "Data lansia berhasil ditambahkan.";
    } else {
        echo "Data lansia gagal ditambahkan: " . mysqli_error($konek);
    }
}
?>
