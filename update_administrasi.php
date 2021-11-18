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


// update data ke database
mysqli_query($koneksi,"update administrasi set kd_administrasi'$kd_administrasi',kd_matkul='$kd_matkul', nid='$nid', nim='$nim', nilai_mhs='$nilai_mhs', semester='$semester', where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>