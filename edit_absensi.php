<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA ABSENSI</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div align="center">
	<fieldset>
	<legend>Edit Data Absensi</legend>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from absensi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_absensi.php">
			<table>
				<tr>			
					<td>Kd_Presensi</td>
					<td>:</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kd_presensi" value="<?php echo $d['kd_presensi']; ?>">
					</td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td>:</td>
					<td><input type="number" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
				</tr>
				<tr>			
					<td>NID</td>
					<td>:</td>
					<td>
						<input type="number" name="nid" value="<?php echo $d['nid']; ?>">
					</td>
				</tr>	
                <tr>
					<td></td>
					<td></td>
					<td><button type="submit">Save</button> <button><a href="index.php">Back</a></button></td>
				</tr>	
			</table>
		</form>
		<?php 
	}
	?>
	</fieldset>
	</div>

</body>
</html>