<?php
include 'koneksi.php';
// echo $_POST;
$id = $_REQUEST['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($koneksi,  $query);
