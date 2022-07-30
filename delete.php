<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from hasil where id='$id'");

header("location:index.php");

?>