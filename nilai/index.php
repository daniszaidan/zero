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
    <p class="note">View Table : Nilai</p>
    <div class="ket"><p>Data data nilai dari para siswa di SMK Al-Irsyad Tegal</p></div>
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

        $nomor=1;
        $hasil = mysql_query("select nis, nama, alamat, bhs_inggris, bhs_indonesia, matematika, kk from tb_siswa inner join tb_nilai on tb_siswa.nis=tb_nilai.niss");

        while($cetak=mysql_fetch_row($hasil)){  

          $niss           =$cetak[0];
          $nama           =$cetak[1];
          $alamat         =$cetak[2];
          $bhs_inggris    =$cetak[3];
          $bhs_indonesia  =$cetak[4];
          $matematika     =$cetak[5];
          $kk             =$cetak[6];
      ?>

      <tr>
        <td class="warna"> <?php echo $nomor ?> </td>
        <td class="warna2"> <?php echo $niss ?> </td>
        <td class="warna2"> <?php echo $nama ?> </td>
        <td class="warna2"> <?php echo $alamat ?> </td>
        <td class="warna2"> <?php echo $bhs_inggris ?> </td>
        <td class="warna2"> <?php echo $bhs_indonesia ?> </td>
        <td class="warna2"> <?php echo $matematika ?> </td>
        <td class="warna2"> <?php echo $kk ?> </td>
        <td class="act"> 
          <center><a class="action1" href="editdata.php?id=<?php echo $niss ?>" >Edit</a>
          <a class="action2" href="hapusdata.php?id=<?php echo $niss ?>" >Hapus</a></center>
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