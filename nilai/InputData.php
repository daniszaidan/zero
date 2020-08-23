<!DOCTYPE html>
<html>
<head>
  <title>Tabel Nilai</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>

  <?php include("../header.php"); ?>

</header>

<!--
    Zero Project - DanZai Web. By Danis Zaidan
    (Dilarang menjiplak/mengedit/mengakui tanpa seijin pembuat)
    Script HTML By DANis ZAIdan
    Script PHP By DANis ZAIdan
    Style CSS By DANis ZAIdan
    Copyright 2016
-->

<div class="kabeh">  
  <div class="judul"><h3>Tabel Nilai</h3></div>
  <div class="isi">
   <p class="note">Input Data : Nilai</p>
    <div class="form">
      <form name="Tambah" method="post" action="Proses.php">
      <table>
      <tr>
        <td>NIS</td>
        <td><input type="text" name="niss" placeholder="Masukkan NIS siswa"></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><input type="text" name="bhs_inggris" placeholder="Masukkan nilai siswa"></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><input type="text" name="bhs_indonesia" placeholder="Masukkan nilai siswa"></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><input type="text" name="matematika" placeholder="Masukkan nilai siswa"></td>
      </tr>
      <tr>
        <td>Kompetisi Kejuruan</td>
        <td><input type="text" name="kk" placeholder="Masukkan nilai siswa"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="tambah" value="Insert"></td>
      </tr>
      </table>
              
      </form>
  </div>
  </div>

  <footer class="footer">
  <p>Copyright &copy <a href="http://nexiapedia.blogspot.com/">DanZai</a> 2016</p>
  </footer>

</div>

</body>
</html>