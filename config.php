<?php
$server="localhost";
$user="root";
$pass="";

	$con = mysqli_connect($server,$user,$pass) or die("Koneksi Gagal");
	mysqli_select_db($con, 'db_mini_quick_book')or die("Database Tidak Ada");
?>