<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_presensi = $_POST['kd_presensi'];
$waktu = $_POST['waktu'];
$nid = $_POST['nid'];

// menginput data ke database
mysqli_query($koneksi,"insert into absensi values('','$kd_presensi','$waktu','$nid')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>