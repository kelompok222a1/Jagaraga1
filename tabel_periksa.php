<?php

include 'koneksi.php';

// Inisialisasi variabel tanggal
$tanggal_pilih = isset($_POST['tgl_periksa']) ? mysqli_real_escape_string($konek, $_POST['tgl_periksa']) : '';

// Query untuk mengambil data jika tanggal dipilih
$result = null;
if (!empty($tanggal_pilih)) {
    $query = "SELECT * FROM tb_pemeriksaan 
              LEFT JOIN tb_lansia ON tb_pemeriksaan.id_lansia = tb_lansia.id_lansia 
              WHERE tb_pemeriksaan.tgl_periksa = '$tanggal_pilih'";
    $result = mysqli_query($konek, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan Lansia</title>
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
    </style>
</head>
<body>
    <h1>Data Pemeriksaan Lansia</h1>
    <h2>Posyandu Jagaraga 1</h2>

    <!-- Form Pilihan Tanggal -->
    <form method="POST" style="text-align: center; margin-bottom: 20px;">
        <label for="tgl_periksa">Pilih Tanggal Periksa:</label>
        <input type="date" id="tgl_periksa" name="tgl_periksa" value="<?= htmlspecialchars($tanggal_pilih) ?>" required>
        <input type="submit" value="Tampilkan">
    </form>

    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th>ID Pemeriksaan</th>
                <th>Tanggal Periksa</th>
                <th>ID Lansia</th>
                <th>Nama Lansia</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Berat</th>
                <th>Tekanan Darah</th>
                <th>Keluhan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id_pemeriksaan']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tgl_periksa']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['id_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['umur']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['berat_lansia']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tekanan_darah']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['keluhan']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data yang ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
