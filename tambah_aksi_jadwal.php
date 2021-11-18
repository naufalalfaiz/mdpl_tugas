<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nid = $_POST['nid'];
$waktu = $_POST['waktu'];

// menginput data ke database
mysqli_query($koneksi,"insert into jadwal values('','$kd_matkul', '$nama','$kelas','$nid','$waktu')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>