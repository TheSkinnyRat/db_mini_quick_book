<?php
include "koneksi.php";
$kd_barang = $_GET['kd_barang'];
$query = mysql_query("delete from tbl_barang where kd_barang='$kd_barang'");
if ($query){
	header('location:data_barang.php');
}