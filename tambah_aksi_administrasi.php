<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_administrasi = $_POST['kd_administrasi'];
$kd_matkul = $_POST['kd_matkul'];
$nid = $_POST['nid'];
$nim = $_POST['nim'];
$nilai_mhs = $_POST['nilai_mhs'];
$semester = $_POST['semester'];

// menginput data ke database
mysqli_query($koneksi,"insert into administrasi values('','$kd_administrasi','$kd_matkul','$nid','$nim','$nilai_mhs','$semester')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>