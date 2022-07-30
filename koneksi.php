<?php

$koneksi = mysqli_connect("localhost","root", "", "pts_ganjil");

if (mysqli_connect_errno()) {
    echo "Error bro, coba dah dibenerin lagi";
}mysqli_connect_error();

?>