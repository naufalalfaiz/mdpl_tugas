
<!DOCTYPE html>
<html>
<head>
	<title> Cetak Tabel Data Mahasiswa</title>

	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>TABEL DATA MAHASISWA</h2>
	<table border="1" id="tabel_data" class="tabel_mahasiswa">
		<tr id="bgn_atas" align="center">
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Program Studi</th>
			<th>Alamat</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['prodi']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
		</tr>
		<?php 
		}
		?>
		</table>
</body>
<script>
	window.print()
</script>
</html>
				