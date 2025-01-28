<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'pjbl_kel2';

$konek=mysqli_connect($host,$user,$pwd,$db);

if (!$konek){
    echo 'koneksi gagal';
}

?>
