<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_lansia = $_POST['id_lansia'];
    $nik_lansia = $_POST['nik_lansia'];
    $nama_lansia = $_POST['nama_lansia'];
    $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $cek_kode = mysqli_query($konek, "SELECT * FROM tb_lansia WHERE id_lansia='$id_lansia'");
    $cek = mysqli_num_rows($cek_kode);

    if ($cek > 0) {
        $input = mysqli_query($konek, "UPDATE tb_lansia SET 
            nik_lansia='$nik_lansia',
            nama_lansia='$nama_lansia',
            tanggal_lahir='$tanggal_lahir',
            jenis_kelamin='$jenis_kelamin',
            alamat='$alamat' 
            WHERE id_lansia='$id_lansia'");

        if ($input) {
            echo "Data lansia berhasil diupdate.";
        } else {
            echo "Data lansia gagal diupdate: " . mysqli_error($konek);
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>