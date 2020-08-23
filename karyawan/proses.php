	<?php

	include("../lib/koneksi.php");

	mysql_query("INSERT INTO tb_karyawan set 
		nipy 	= '$_POST[nipy]',
		nama 	= '$_POST[nama]',
		alamat	= '$_POST[alamat]',
		no_telp = '$_POST[no_telp]' ")
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