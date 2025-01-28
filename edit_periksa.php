<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pemeriksaan = $_POST['id_pemeriksaan'];
    $tgl_periksa = date('Y-m-d', strtotime($_POST['tgl_periksa']));
    $id_lansia = $_POST['id_lansia'];
    $berat_lansia = $_POST['berat_lansia'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];
 
    $cek_kode = mysqli_query($konek, "SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan='$id_pemeriksaan'");
    $cek = mysqli_num_rows($cek_kode);

    if ($cek > 0) {
        $input = mysqli_query($konek, "UPDATE tb_pemeriksaan SET 
            id_pemeriksaan = '$id_pemeriksaan',
            tgl_periksa = '$tgl_periksa',
            id_lansia = '$id_lansia',
            berat_lansia = '$berat_lansia',
            tekanan_darah = '$tekanan_darah',
            umur = '$umur',
            keluhan = '$keluhan'
            WHERE id_pemeriksaan='$id_pemeriksaan'");

        if ($input) {
            echo "Data Pemeriksaan Berhasil Diupdate.";
        } else {
            echo "Data pemeriksaan Gagal Diupdate: " . mysqli_error($konek);
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>