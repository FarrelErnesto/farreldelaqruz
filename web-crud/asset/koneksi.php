<?php
$connect=mysqli_connect("localhost","root","","web-crud");

if(!$connect){
    echo "Koneksi Gagal";
    die();
}
?>