
<!DOCTYPE html>
<html>
<head>
	<title> Cetak Tabel Data Administrasi </title>

	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>TABEL DATA ADMINISTRASI</h2>
	<table border="1" id="tabel_data" class="tabel_administrasi">
		<tr id="bgn_atas" align="center">
			<th>NO</th>
			<th>Kd_Administrasi</th>
			<th>Kd_Matkul</th>
			<th>NID</th>
			<th>NIM</th>
			<th>Nilai_Mahasiswa</th>
			<th>Semester</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from administrasi");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kd_administrasi']; ?></td>
			<td><?php echo $d['kd_matkul']; ?></td>
			<td><?php echo $d['nid']; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nilai_mahasiswa']; ?></td>
			<td><?php echo $d['semester']; ?></td>
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
				