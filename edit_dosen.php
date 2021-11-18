<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA DOSEN</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div align="center">
	<fieldset>
	<legend>Edit Data Dosen</legend>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from dosen where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_dosen.php">
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
					<td>NID</td>
					<td>:</td>
					<td><input type="number" name="nid" value="<?php echo $d['nid']; ?>"></td>
				</tr>
				<tr>			
					<td>Jurusan</td>
					<td>:</td>
					<td>
						<input type="text" name="prodi" value="<?php echo $d['prodi']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
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