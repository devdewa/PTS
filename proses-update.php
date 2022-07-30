<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama= $_POST['nama'];
$nilai= $_POST['nilai'];

$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

$dirUpload = "asset/image/post-img/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

mysqli_query($koneksi, "UPDATE hasil set nama='$nama', nilai='$nilai', image='$namaFile' WHERE id='$id'");

header('location:index.php');

?>