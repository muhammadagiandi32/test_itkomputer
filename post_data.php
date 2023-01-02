<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$tlp = $_POST['tlp'];
$komentar = $_POST['komentar'];
$query = "INSERT INTO `users` (`id`, `nama`, `email`, `telep`, `komentar`) VALUES (NULL, '$nama', '$email', '$tlp', '$komentar');";

$result = mysqli_query($koneksi, $query);

if ($result > 0) {
    // echo json_encode($_POST['nama']);
    echo http_response_code(200);
} else {
    echo http_response_code(401);
}
