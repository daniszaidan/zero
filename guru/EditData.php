<!DOCTYPE html>
<html>
<head>
  <title>Table Teacher</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>

	<?php 
		include("../header.php");
		include("../lib/koneksi.php");

		$id=$_GET['id'];
		$sql = mysql_query("SELECT * FROM tb_guru WHERE nipy=$id") or die(mysql_error());
		$cetak  	= mysql_fetch_row($sql);

		$nipy		= $cetak[0];
		$nama 		= $cetak[1];
		$alamat 	= $cetak[2];
		$prodi		= $cetak[3];
		$no_telp	= $cetak[4];


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
  <div class="judul"><h3>Table Teacher</h3></div>
  <div class="isi">
   <p class="note">Input Data : Guru</p>
    <div class="form">
			<form name="Tambah" method="post" action="EditDataProses.php">
			<table>
			<tr>
				<td class="id">NIPY : <?php echo "$nipy"; ?></td>
				<td><input type="hidden" name="nipy" value="<?php echo $nipy; ?>"></td>
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
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $prodi; ?>"></td>
			</tr>
			<tr>
				<td>No Telpon</td>
				<td><input type="text" name="no_telp" value="<?php echo $no_telp; ?>"></td>
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