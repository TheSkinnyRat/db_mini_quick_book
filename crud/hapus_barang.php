<?php
include "config.php";
$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($con, "delete from tbl_barang where kd_barang='$kd_barang'");
if ($query){
	header('location:data_barang.php');
}