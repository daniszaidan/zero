	<?php

	include("../lib/koneksi.php");

	mysql_query("INSERT INTO tb_nilai set 
		niss 			= '$_POST[niss]',
		bhs_inggris 	= '$_POST[bhs_inggris]',
		bhs_indonesia	= '$_POST[bhs_indonesia]',
		matematika		= '$_POST[matematika]',
		kk 				= '$_POST[kk]' ")
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