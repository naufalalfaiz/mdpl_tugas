<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH DATA ADMINISTRASI</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div align="center">
  <fieldset>
  <legend>Tambah Data Administrasi</legend>
  <form method="post" action="tambah_aksi_administrasi.php">
    <table>
      <tr>      
        <td>Kd_Administrasi</td>
        <td>:</td>
        <td><input type="number" name="kd_administrasi"></td>
      </tr>
      <tr>      
        <td>Kd_Matkul</td>
        <td>:</td>
        <td><input type="number" name="kd_matkul"></td>
      </tr>
      <tr>
        <td>NID</td>
        <td>:</td>
        <td><input type="number" name="nid"></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="number" name="nim"></td>
      </tr>
      <tr>
        <td>Nilai_Mahasiswa</td>
        <td>:</td>
        <td><input type="number" name="nilai_mhs"></td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>:</td>
        <td><input type="number" name="semester"></td>
      </tr>
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