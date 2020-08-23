<!DOCTYPE html>
<html>
<head>
	
  <title>404</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Quicksand" rel="stylesheet">

</head>
<body>

<header>

	<?php include("header.php"); ?>

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
  <div class="judul"><h3>Eror 404 : Not found</h3></div>
  <div class="isi">
    <p class="note">Hasil Pencarian...</p>

    <h1 class="home">Maaf, hasil pencarian tidak ditemukan</h1>
	<h2 class="home2">Kunjungi halaman Siswa/Guru/Karyawan/Nilai untuk pencarian yang relevan</h2>

	<!-- <?php

		include("lib/koneksi.php");
		
		

		if ((isset($_POST['submit'])) AND ($_POST['cari'] <> ""))
		{
			$id=$_POST['cari'];
			$nomor=1;
			$caridata = mysql_query("SELECT * FROM tb_siswa where 
						nis LIKE '%$id%' OR
					  	nisn LIKE '%$id%' OR 
					  	nama LIKE '%$id%' OR 
					  	alamat LIKE '%$id%' OR 
					  	jurusan LIKE '%$id%' ");
		

	?>

	<table width="auto" cellspacing="2" class="tabel" border="1">
		<tr bgcolor="#0000ff">
			<td>No</td>
			<td>NIS</td>
			<td>NISN</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
			<td>Action</td>
		</tr>

	<?php 
		while ($cetak = mysql_fetch_row($caridata))
			{
	?>

		<tr>
			<td bgcolor='#0000ff'> <?php echo $nomor; ?> </td>
			<td> <?php echo $cetak[0]; ?> </td>
			<td> <?php echo $cetak[1]; ?> </td>
			<td> <?php echo $cetak[2]; ?> </td>
			<td> <?php echo $cetak[3]; ?> </td>
			<td> <?php echo $cetak[4]; ?> </td>
			<td> 
				<?php $nis= $cetak[0]; ?>
					<center><a href="editdata.php?id=<?php echo $nis ?>" > Edit </a> | 
					<a href="hapusdata.php?id=<?php echo $nis ?>" > Hapus </a></center>
			</td>

	<?php 
		$nomor++;
			} //Penutup while
		} //Penutup IF pertama
	?>
		</tr>
	</table> -->

</div>

  <footer class="footer">
  <p>Copyright &copy <a href="http://nexiapedia.blogspot.com/">DanZai</a> 2016</p>
  </footer>
  
  </div>

</body>
</html>