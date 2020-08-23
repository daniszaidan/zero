	<?php

	include("../lib/koneksi.php");

	mysql_query("INSERT INTO tb_siswa set 
		nis 	= '$_POST[nis]',
		nisn 	= '$_POST[nisn]',
		nama	= '$_POST[nama]',
		alamat	= '$_POST[alamat]',
		jurusan = '$_POST[jurusan]' ")
	or die(mysql_error());

	mysql_close($koneksi);
	
	header("location:index.php")

	?>

<!--
    Zero Project - DanZai Web. By Danis Zaidan
    (Dilarang menjiplak/mengedit/mengakui tanpa seijin pembuat)
    Script HTML By DANis ZAIdan
    Script PHP By DANis ZAIdan
    Style CSS By DANis ZAIdan
    Copyright 2016
-->