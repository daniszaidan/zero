<!DOCTYPE html>
<html>
<head>
  <title>Table Teacher</title>
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
  <div class="judul"><h3>Table Teacher</h3></div>
  <div class="isi">
   <p class="note">Input Data : Guru</p>
    <div class="form">
			<form name="Tambah" method="post" action="Proses.php">
			<table>
			<tr>
				<td>NIPY</td>
				<td><input type="text" name="nipy" placeholder="Masukkan NIPY guru"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama guru"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" placeholder="Masukkan Alamat guru"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" placeholder="Masukkan Prodi guru"></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td><input type="text" name="no_telp" placeholder="Masukkan No Telpon guru"></td>
			</tr>
			<tr>
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