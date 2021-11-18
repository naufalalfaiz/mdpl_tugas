<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kd_matkul = $_POST['kd_matkul'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$nid = $_POST['nid'];

// update data ke database
mysqli_query($koneksi,"update matkul set kd_matkul='$kd_matkul', nama='$nama', sks='$sks', nid='$nid' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>