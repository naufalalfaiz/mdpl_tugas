
<!DOCTYPE html>
<html>
<head>
	<title> Cetak Tabel Data Absensi</title>

	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>TABEL DATA ABSENSI</h2>
	<table border="1" id="tabel_data" class="tabel_absensi">
		<tr id="bgn_atas" align="center">
            <th>NO</th>
			<th>KD_PRESENSI</th>
			<th>WAKTU</th>
			<th>NID</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from absensi");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kd_presensi']; ?></td>
			<td><?php echo $d['waktu']; ?></td>
			<td><?php echo $d['nid']; ?></td>
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
				