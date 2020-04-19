<?php 
	$server="localhost";
	$username="baseanalyzer";
	$password="worm21011003045";
	$database="nuri";

	$koneksi = mysqli_connect("$server", "$username","$password","$database");
	if (!$koneksi){
		die("Gagal, Database tidak ditemukan" . mysqli_connect_error());
	}

?>