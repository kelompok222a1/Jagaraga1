<?php

include 'koneksi.php';

$query = "SELECT * FROM tb_lansia";
$result = mysqli_query($konek, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lansia</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left; 
        }
        th {
            background-color: #eff8ffff;
        }
        h1, h2 {
            text-align: center; 
        }
        .export-form {
            margin: 20px 0;
            text-align: center;
        }
        .export-form button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Data Lansia</h1>
    <h2>Posyandu Jagaraga 1</h2>

    <table>
        <thead>
            <tr>
                <th>ID Lansia</th>
                <th>NIK Lansia</th>
                <th>Nama Lansia</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nik_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data yang ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
