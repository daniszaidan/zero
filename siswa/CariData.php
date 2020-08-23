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
    <p class="note">Hasil Pencarian...</p>
    <table width="auto" cellspacing="2" class="tabel">
      <tr class="warna">
        <td>No</td>
        <td>NIS</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jurusan</td>
        <td>Action</td>
      </tr>

      <?php

		include("../lib/koneksi.php");
		$id=$_POST['cari'];
		$nomor=1;	

		$caridata = mysql_query("SELECT * FROM tb_siswa where 
						nis LIKE '%$id%' OR
					  	nisn LIKE '%$id%' OR 
					  	nama LIKE '%$id%' OR 
					  	alamat LIKE '%$id%' OR 
					  	jurusan LIKE '%$id%' ");

		while ($cetak = mysql_fetch_row($caridata)){	

      ?>

      <tr>
        <td class="warna"> <?php echo $nomor; ?> </td>
        <td class="warna2"> <?php echo $cetak[0]; ?> </td>
        <td class="warna2"> <?php echo $cetak[1]; ?> </td>
        <td class="warna2"> <?php echo $cetak[2]; ?> </td>
        <td class="warna2"> <?php echo $cetak[3]; ?> </td>
        <td class="warna2"> <?php echo $cetak[4]; ?> </td>
        <td class="act"> 
        <?php $nis= $cetak[0]; ?>
          <center><a class="action1" href="editdata.php?id=<?php echo $nis ?>" >Edit</a>
          <a class="action2" href="hapusdata.php?id=<?php echo $nis ?>" >Hapus</a></center>
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