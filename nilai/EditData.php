<!DOCTYPE html>
<html>
<head>
  <title>Tabel Nilai</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>

	<?php 
		include("../header.php");
		include("../lib/koneksi.php");

		$id 	= $_GET['id'];
		$sql 	= mysql_query("SELECT * FROM tb_nilai WHERE niss=$id") or die(mysql_error());
		$cetak  = mysql_fetch_row($sql);

		$niss           =	$cetak[0];
        $bhs_inggris    =	$cetak[1];
        $bhs_indonesia  =	$cetak[2];
        $matematika     =	$cetak[3];
        $kk             =	$cetak[4];

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
  <div class="judul"><h3>Tabel Nilai</h3></div>
  <div class="isi">
   <p class="note">Input Data : Nilai</p>
    <div class="form">
			<form name="Tambah" method="post" action="EditDataProses.php">
			<table>
			<tr>
				<td class="id">NIS : <?php echo "$niss"; ?></td>
				<td><input type="hidden" name="niss" value="<?php echo $niss; ?>"></td>
			</tr>
			<tr>
		        <td>Bahasa Inggris</td>
		        <td><input type="text" name="bhs_inggris" value="<?php echo $bhs_inggris; ?>"></td>
		      </tr>
		      <tr>
		        <td>Bahasa Indonesia</td>
		        <td><input type="text" name="bhs_indonesia" value="<?php echo $bhs_indonesia; ?>"></td>
		      </tr>
		      <tr>
		        <td>Matematika</td>
		        <td><input type="text" name="matematika" value="<?php echo $matematika; ?>"></td>
		      </tr>
		      <tr>
		        <td>Kompetisi Kejuruan</td>
		        <td><input type="text" name="kk" value="<?php echo $kk; ?>"></td>
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