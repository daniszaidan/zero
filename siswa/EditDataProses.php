<?php
	
	include("../lib/koneksi.php");

	$id=$_POST['nis'];

		mysql_query("UPDATE tb_siswa set 
		nis 	= '$_POST[nis]',
		nisn 	= '$_POST[nisn]',
		nama	= '$_POST[nama]',
		alamat	= '$_POST[alamat]',
		jurusan = '$_POST[jurusan]'
		where nis=$id ") or die(mysql_error());

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