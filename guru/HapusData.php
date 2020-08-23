<?php

	include("../lib/koneksi.php");

	$id=$_GET['id'];
	mysql_query("DELETE FROM tb_guru where nipy=$id")
	or die(mysql_error());

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