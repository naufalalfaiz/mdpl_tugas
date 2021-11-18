
<!DOCTYPE html>
<html>
<head>
	<title> Cetak Tabel Data Mata Kuliah</title>

	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>TABEL DATA MATA KULIAH</h2>
	<table border="1" id="tabel_data" class="tabel_matkul">
		<tr id="bgn_atas" align="center">
			<th>NO</th>
			<th>Kd_Matkul</th>
			<th>Nama</th>
			<th>Jumblah SKS</th>
			<th>NID</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matkul");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kd_matkul']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['sks']; ?></td>
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
				