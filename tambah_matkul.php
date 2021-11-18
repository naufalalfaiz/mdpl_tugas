<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH DATA MATKUL</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div align="center">
  <fieldset>
  <legend>Tambah Data Mata Kuliah</legend>
  <form method="post" action="tambah_aksi_matkul.php">
    <table>
      <tr>      
        <td>Kd_Matkul</td>
        <td>:</td>
        <td><input type="text" name="Kd_Matkul"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>SKS</td>
        <td>:</td>
        <td><input type="text" name="sks"></td>
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