<?php
include 'koneksi.php';

// Nama file Excel
$fileName = "data_lansia_" . date('YmdHis') . ".xls";

// Header untuk mengunduh file Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");
header("Pragma: no-cache");
header("Expires: 0");

// Query untuk mengambil data
$query = "SELECT * FROM tb_lansia";
$result = mysqli_query($konek, $query);

// Buat konten Excel
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID Lansia</th>";
echo "<th>NIK Lansia</th>";
echo "<th>Nama Lansia</th>";
echo "<th>Tanggal Lahir</th>";
echo "<th>Jenis Kelamin</th>";
echo "<th>Alamat</th>";
echo "</tr>";

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
echo "</table>";
exit;
?>