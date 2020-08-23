<!DOCTYPE html>
<html>
<head>
  <title>Table Student</title>
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
  <div class="judul"><h3>Table Student</h3></div>
  <div class="isi">
   <p class="note">Input Data : Siswa</p>
    <div class="form">
			<form name="Tambah" method="post" action="Proses.php">
			<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" placeholder="Masukkan NIS siswa"></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td><input type="text" name="nisn" placeholder="Masukkan NISN siswa"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" placeholder="Masukkan kelas siswa"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" placeholder="Masukkan alamat siswa"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" placeholder="Masukkan jurusan siswa"></td>
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