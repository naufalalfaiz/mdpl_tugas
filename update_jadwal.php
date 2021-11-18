<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nid = $_POST['nid'];
$waktu = $_POST['waktu'];

// update data ke database
mysqli_query($koneksi,"update jadwal set kd_matkul='$kd_matkul', nama='$nama', kelas='$kelas', nid='$nid', waktu='$waktu' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>