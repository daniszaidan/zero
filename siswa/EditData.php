<!DOCTYPE html>
<html>
<head>
  <title>Table Student</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>

	<?php 
		include("../header.php");
		include("../lib/koneksi.php");

		$id=$_GET['id'];
		$sql = mysql_query("SELECT * FROM tb_siswa WHERE nis=$id") or die(mysql_error());
		$data  	= mysql_fetch_row($sql);

		$nis=$data[0];
		$nisn=$data[1];
		$nama=$data[2];
		$alamat=$data[3];
		$jurusan=$data[4];

	?>

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
			<form name="Tambah" method="post" action="EditDataProses.php">
			<table>
			<tr>
				<td class="id">NIS : <?php echo "$nis"; ?></td>
				<td><input type="hidden" name="nis" value="<?php echo $nis; ?>"></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td><input type="text" name="nisn" value="<?php echo $nisn; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $jurusan; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tambah" value="Edit"></td>
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