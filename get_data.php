<?php
include 'koneksi.php';

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi,  $query);
$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
