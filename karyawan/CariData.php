<!DOCTYPE html>
<html>
<head>
	
  <title>Table Employees</title>
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
  <div class="judul"><h3>Table Employees</h3></div>
  <div class="isi">
    <p class="note">Hasil Pencarian...</p>
    <table width="auto" cellspacing="2" class="tabel">
      <tr class="warna">
			<td>No</td>
			<td>NIPY</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>No Telpon</td>
			<td>Action</td>
		</tr>

		<?php

		include("../lib/koneksi.php");
		$id=$_POST['cari'];
		$nomor=1;	

		$caridata = mysql_query("SELECT * FROM tb_karyawan where 
						nipy LIKE '%$id%' OR
					  	nama LIKE '%$id%' OR 
					  	alamat LIKE '%$id%' OR  
					  	no_telp LIKE '%$id%' ");

		while ($cetak = mysql_fetch_row($caridata)){	

			$nipy		= $cetak[0];
			$nama 		= $cetak[1];
			$alamat 	= $cetak[2];
			$no_telp	= $cetak[3];

		?>

		<tr>
			<td class="warna"> <?php echo $nomor; ?> </td>
			<td class="warna2"> <?php echo $nipy ?> </td>
			<td class="warna2"> <?php echo $nama ?> </td>
			<td class="warna2"> <?php echo $alamat ?> </td>
			<td class="warna2"> <?php echo $no_telp ?> </td>
			<td class="act"> 
					<center><a class="action1" href="editdata.php?id=<?php echo $nipy ?>" >Edit</a>
					<a class="action2" href="hapusdata.php?id=<?php echo $nipy ?>" >Hapus</a></center>
			</td>

		<?php 
			$nomor++;
			}
		?>
		</tr>
	</table>
</div>

  <footer class="footer">
  <p>Copyright &copy <a href="http://nexiapedia.blogspot.com/">DanZai</a> 2016</p>
  </footer>
  
  </div>

</body>
</html>