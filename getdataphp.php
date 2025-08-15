<?php
include 'init_koneksi_db.php';

$sql = "SELECT judul, keterangan FROM web;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<h1>' . $row["judul"] . '</h1>';
        echo '<p>' . $row["keterangan"] . '</p>';
    }
}
?>