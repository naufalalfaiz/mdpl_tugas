<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_presensi = $_POST['kd_presensi'];
$waktu = $_POST['waktu'];
$nid = $_POST['nid'];


// update data ke database
mysqli_query($koneksi,"update absensi set kd_presensi='$kd_presensi', waktu='$waktu', nid='$nid', where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>