<?php

include 'koneksi.php';

if (isset($_POST['id_pemeriksaan'])) { 
    $id_pemeriksaan = $_POST['id_pemeriksaan']; 

    $query = "DELETE FROM tb_pemeriksaan WHERE id_pemeriksaan = '$id_pemeriksaan'";
    if (mysqli_query($konek, $query)) {
        echo "Data Pemeriksaan berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($konek);
    }
} else {
    echo "ID Pemeriksaan tidak ditemukan.";
}
?>