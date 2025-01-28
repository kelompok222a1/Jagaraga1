<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id_pemeriksaan = $_POST['id_pemeriksaan'];
    $tgl_periksa = date('Y-m-d', strtotime($_POST['tgl_periksa']));
    $id_lansia = $_POST['id_lansia'];
    $berat_lansia = $_POST['berat_lansia'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];

    $query = "INSERT INTO tb_pemeriksaan (id_pemeriksaan, tgl_periksa, id_lansia, berat_lansia, tekanan_darah, umur, keluhan) 
    VALUES ('$id_pemeriksaan', '$tgl_periksa', '$id_lansia', '$berat_lansia', '$tekanan_darah', '$umur', '$keluhan')";

    $result = mysqli_query($konek, $query);
    if ($result) {
            echo "Data Pemeriksaan Berhasil di Tambahkan.";
    } else {
        echo "Data Pemeriksaan Gagal di Tambahkan: " . mysqli_error($konek);
    }
}
?>
