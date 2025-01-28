<?php

include 'koneksi.php';

if (isset($_POST['id_lansia'])) { 
    $id_lansia = $_POST['id_lansia']; 

    $query = "DELETE FROM tb_lansia WHERE id_lansia = '$id_lansia'";
    if (mysqli_query($konek, $query)) {
        echo "Data lansia berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($konek);
    }
} else {
    echo "ID lansia tidak ditemukan.";
}
?>