<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query cek username dan password
    $query = "SELECT * FROM tb_kader WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($konek, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        echo "Username atau password salah.";
    }
}

?>