<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH DATA JADWAL</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div align="center">
  <fieldset>
  <legend>Tambah Data Jadwal</legend>
  <form method="post" action="tambah_aksi_jadwal.php">
    <table>
      <tr>      
        <td>Kd_Matkul</td>
        <td>:</td>
        <td><input type="text" name="kd_matkul"></td>
      </tr>
      <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="kelas"></td>
      </tr>
      <tr>
        <td>NID</td>
        <td>:</td>
        <td><input type="number" name="nid"></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td>:</td>
        <td><input type="number" name="waktu"></td>
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