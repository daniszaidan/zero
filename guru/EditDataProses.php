<?php
	
	include("../lib/koneksi.php");

	$id=$_POST['nipy'];

		mysql_query("UPDATE tb_guru set 
		nipy 	= '$_POST[nipy]',
		nama 	= '$_POST[nama]',
		alamat	= '$_POST[alamat]',
		prodi	= '$_POST[prodi]',
		no_telp = '$_POST[no_telp]'
		where nipy=$id ") or die(mysql_error());

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