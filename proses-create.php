<?php 

include 'koneksi.php';

$nama= $_POST['nama'];
$nilai= $_POST['nilai'];

$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

$dirUpload = "asset/image/post-img/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

mysqli_query($koneksi, "INSERT into hasil values('', '$nama', '$nilai', '$namaFile')");

header("location:index.php");

?>