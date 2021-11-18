<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_matkul = $_POST['nid'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$nid = $_POST['nid'];

// menginput data ke database
mysqli_query($koneksi,"insert into matkul values('','kd_matkul','$nama','$sks','$nid')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>