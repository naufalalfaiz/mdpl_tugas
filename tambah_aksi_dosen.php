<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nid = $_POST['nid'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"insert into dosen values('','$nid','$nama','$prodi','$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>