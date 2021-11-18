<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA MATKUL</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div align="center">
	<fieldset>
	<legend>Edit Data Mata Kuliah</legend>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from matkul where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_matkul.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kd_Matkul</td>
					<td>:</td>
					<td><input type="text" name="kd_matkul" value="<?php echo $d['kd_matkul']; ?>"></td>
				</tr>
				<tr>			
					<td>Jumlah SKS</td>
					<td>:</td>
					<td>
						<input type="text" name="sks" value="<?php echo $d['sks']; ?>">
					</td>
				</tr>
				<tr>
					<td>NID</td>
					<td>:</td>
					<td><input type="number" name="nid" value="<?php echo $d['nid']; ?>"></td>
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