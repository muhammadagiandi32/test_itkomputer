<?php
include 'koneksi.php';
// echo $_POST;
$id = $_REQUEST['id'];
$query = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($koneksi,  $query);
header('Location: http://localhost:8888/test_it/');
// if()
// if ($result > 0) {
//     echo http_response_code(200);
// } else {
//     echo http_response_code(401);
// }
