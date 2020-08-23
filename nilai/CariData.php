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
        <td rowspan="2">No</td>
        <td rowspan="2">NIS</td>
        <td rowspan="2">Nama</td>
        <td rowspan="2">Alamat</td>
        <td colspan="4">Nilai</td>
        <td rowspan="2">Action</td>
      </tr>
      <tr class="warna">
        <td>B.Ing</td>
        <td>B.Ind</td>
        <td>Mat</td>
        <td>KK</td>
      </tr>

      <?php

		include("../lib/koneksi.php");
		$id=$_POST['cari'];
		$nomor=1;	

		$caridata = mysql_query("SELECT nis, nama, alamat, niss, bhs_inggris, bhs_indonesia, matematika, kk from tb_siswa inner join tb_nilai on tb_siswa.nis=tb_nilai.niss where 
            nis LIKE '%$id%' OR
            nama LIKE '%$id%' OR
            alamat LIKE '%$id%' OR
            bhs_inggris LIKE '%$id%' OR
            bhs_indonesia LIKE '%$id%' OR
            matematika LIKE '%$id%' OR 
            kk LIKE '%$id%'");

		while ($cetak = mysql_fetch_row($caridata)){	

          $nis            =$cetak[0];
          $nama           =$cetak[1];
          $alamat         =$cetak[2];
          $bhs_inggris    =$cetak[4];
          $bhs_indonesia  =$cetak[5];
          $matematika     =$cetak[6];
          $kk             =$cetak[7];

      ?>

      <tr>
        <td class="warna"> <?php echo $nomor ?> </td>
        <td class="warna2"> <?php echo $nis ?> </td>
        <td class="warna2"> <?php echo $nama ?> </td>
        <td class="warna2"> <?php echo $alamat ?> </td>
        <td class="warna2"> <?php echo $bhs_inggris ?> </td>
        <td class="warna2"> <?php echo $bhs_indonesia ?> </td>
        <td class="warna2"> <?php echo $matematika ?> </td>
        <td class="warna2"> <?php echo $kk ?> </td>
        <td class="act"> 
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