<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH DATA MAHASISWA</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div align="center">
  <fieldset>
  <legend>Tambah Data Mahasiswa</legend>
  <form method="post" action="tambah_aksi_mahasiswa.php">
    <table>
      <tr>      
        <td>NIM</td>
        <td>:</td>
        <td><input type="number" name="nim"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><input type="text" name="prodi"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="submit">Simpan</button></td>
      </tr>   
    </table>
  </form>
  </fieldset>
  </div>
</body>
</html>