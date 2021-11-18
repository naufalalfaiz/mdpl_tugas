<!DOCTYPE html>
<html>
<head>
	<title>MDPL 9 - Minggu ke 6</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<table cellspacing="0" cellpadding="10" width="100%" >
		<!--header-->
		<tr>
			<td class="left_header"> <h3>MDPL IX</h3></td>
			<td class="right_header"> </td>
		</tr>
		<!--sidebar-->
		<tr>
			<td class="sidebar" rowspan="2">
			<div id="secondary">
				<ul>
			        <li><a class="active" href="index.php">Dasboard</a></li>
			        <li><a href="tambah_mahasiswa.php">Input Data Mahaiswa</a></li>
			        <li><a href="tambah_dosen.php">Input Data Dosen</a></li>
			        <li><a href="tambah_matkul.php">Input Data Matakuliah</a></li>
			        <li><a href="tambah_absensi.php">Input Data Absensi</a></li>
			        <li><a href="tambah_administrasi.php">Input Data Administrasi</a></li>
			        <li><a href="tambah_jadwal.php">Input Data Jadwal</a></li>
			        <br>
			        <li><a href="#tabel_mahasiswa">Daftar Mahasiswa</a></li>
			        <li><a href="#tabel_dosen">Daftar Dosen</a><li>
			        <li><a href="#tabel_matkul">Daftar Matakuliah</a></li>
			        <li><a href="#tabel_absensi">Daftar Absensi</a><li>
			        <li><a href="#tabel_administrasi">Daftar Administrasi</a></li>
			        <li><a href="#tabel_jadwal">Daftar Jadwal</a></li>
			    </ul>
			    </ul>
		    </div>
			</td>
		<!--content-->
			<td class="content" align="center">
				<h2>TABEL MAHASISWA</h2>
				<a href="tambah_mahasiswa.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_mahasiswa">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Prodi</th>
						<th>Alamat</th>
						<th>OPSI</th>
					</tr>
					<?php 
					include 'koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select * from mahasiswa");
					while($d = mysqli_fetch_array($data)){
						?>
					<tr align="center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nim']; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['prodi']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td>
							<a href="edit_mahasiswa.php?id=<?php echo $d['id']; ?>">EDIT</a>
							<a href="hapus_mahasiswa.php?id=<?php echo $d['id']; ?>">HAPUS</a>
						</td>
					</tr>
					<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblMahasiswa.php">Print</a></button>

				<br><br><br>
				<h2>TABEL DOSEN</h2>
				<a href="tambah_dosen.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_dosen">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>NID</th>
						<th>Nama</th>
						<th>Prodi</th>
						<th>Alamat</th>
						<th>OPSI</th>
					</tr>
					<?php 
					include 'koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select * from dosen");
					while($d = mysqli_fetch_array($data)){
						?>
						<tr align="center">
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['nid']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['prodi']; ?></td>
							<td><?php echo $d['alamat']; ?></td>
							<td>
								<a href="edit_dosen.php?id=<?php echo $d['id']; ?>">EDIT</a>
								<a href="hapus_dosen.php?id=<?php echo $d['id']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblDosen.php">Print</a></button>

				<br><br><br>
				<h2>TABEL MATA KULIAH</h2>
				<a href="tambah_matkul.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_matkul">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>Kd_Matkul</th>
						<th>Nama</th>
						<th>Jumblah SKS</th>
						<th>NID</th>
						<th>OPSI</th>
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
							<td>
								<a href="edit_matkul.php?id=<?php echo $d['id']; ?>">EDIT</a>
								<a href="hapus_matkul.php?id=<?php echo $d['id']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblMatkul.php">Print</a></button>
				
				<br><br><br>
				<h2>TABEL ABSENSI</h2>
				<a href="tambah_absensi.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_absensi">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>KD_PRESENSI</th>
						<th>WAKTU</th>
						<th>NID</th>
						<th>OPSI</th>
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
							<td>
								<a href="edit_absensi.php?id=<?php echo $d['id']; ?>">EDIT</a>
								<a href="hapus_absensi.php?id=<?php echo $d['id']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblAbsensi.php">Print</a></button>
				
				<br><br><br>
				<h2>TABEL ADIMISTRASI</h2>
				<a href="tambah_administrasi.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_administrasi">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>KD_ADMINISTRASI</th>
						<th>KD_MATKUL</th>
						<th>NID</th>
						<th>NIM</th>
						<th>NILAI_MAHASISWA</th>
						<th>SEMESTER</th>
						<th>OPSI</th>
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
							<td><?php echo $d['nilai_mhs']; ?></td>
							<td><?php echo $d['semester']; ?></td>
							<td>
								<a href="edit_administrasi.php?id=<?php echo $d['id']; ?>">EDIT</a>
								<a href="hapus_administrasi.php?id=<?php echo $d['id']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblAdministrasi.php">Print</a></button>
				
				<br><br><br>
				<h2>TABEL JADWAL</h2>
				<a href="tambah_jadwal.php">+ Input Data</a>
				<br/>
				<br/>
				<table border="1" id="tabel_jadwal">
					<tr id="bgn_atas" align="center">
						<th>NO</th>
						<th>KD_MATKUL</th>
						<th>NAMA</th>
						<th>KELAS</th>
						<th>NID</th>
						<th>WAKTU</th>
						<th>OPSI</th>
					</tr>
					<?php 
					include 'koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select * from jadwal");
					while($d = mysqli_fetch_array($data)){
						?>
						<tr align="center">
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['kd_matkul']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['kelas']; ?></td>
							<td><?php echo $d['nid']; ?></td>
							<td><?php echo $d['waktu']; ?></td>
							<td>
								<a href="edit_jadwal.php?id=<?php echo $d['id']; ?>">EDIT</a>
								<a href="hapus_jadwal.php?id=<?php echo $d['id']; ?>">HAPUS</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
				<br>
				<button><a href="cetak_tblJadwal.php">Print</a></button>
				
				<br><br><br>
				
				
				<br>
			</td>
		<!--footer-->
		<tr id="footer"><td>Copyright &copy; 2021 <strong>Four Humans</strong>. All rights reserved</td></tr>
	</table>
</body>
</html>