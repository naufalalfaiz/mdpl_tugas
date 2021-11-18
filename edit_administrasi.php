<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA ADMINISTRASI</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div align="center">
	<fieldset>
	<legend>Edit Data Administrasi</legend>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from administrasi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_administrasi.php">
			<table>
				<tr>			
					<td>Kd_Administrasi</td>
					<td>:</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="kd_administrasi" value="<?php echo $d['kd_administrasi']; ?>">
					</td>
				</tr>
                <tr>
					<td>Kd_Matkul</td>
					<td>:</td>
					<td><input type="number" name="kd_matkul" value="<?php echo $d['kd_matkul']; ?>"></td>
				</tr>
				<tr>
					<td>NID</td>
					<td>:</td>
					<td><input type="number" name="nid" value="<?php echo $d['nid']; ?>"></td>
				</tr>
                <tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>			
					<td>Nilai_Mahasiswa</td>
					<td>:</td>
					<td><input type="number" name="nilai_mhs" value="<?php echo $d['nilai_mhs']; ?>"></td>
				</tr>
                <tr>			
					<td>Semester</td>
					<td>:</td>
					<td><input type="number" name="semester" value="<?php echo $d['semester']; ?>"></td>
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