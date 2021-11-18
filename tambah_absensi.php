<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH DATA ABSENSI</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div align="center">
  <fieldset>
  <legend>Tambah Data Absensi</legend>
  <form method="post" action="tambah_aksi_absensi.php">
    <table>
      <tr>      
        <td>Kd_Presensi</td>
        <td>:</td>
        <td><input type="number" name="kd_presensi"></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td>:</td>
        <td><input type="number" name="waktu"></td>
      </tr>
      <tr>
        <td>NID</td>
        <td>:</td>
        <td><input type="number" name="nid"></td>
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