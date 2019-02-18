<?php
	date_default_timezone_set('Asia/Jakarta');
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("MySQL E !<br>");
	}
	$Koneksi = mysql_select_db("pkl-ppdb");
		if (!$Koneksi){
		die ("DBase E !");
	}
?>