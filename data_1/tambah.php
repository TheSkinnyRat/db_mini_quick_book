<?php
include ('koneksi.php');

$kd_barang = $_POST['kd_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$spesifikasi_barang = $_POST['spesifikasi_barang'];
$stock = $_POST['stock'];
$hrg_modal = $_POST['hrg_modal'];
$hrg_jual = $_POST['hrg_jual'];
$diskon = $_POST['diskon'];
$status = $_POST['status'];

$query = mysql_query("insert into tbl_barang (kd_barang,deskripsi_barang,spesifikasi_barang,stock,hrg_modal,hrg_jual,diskon,status) values ('$kd_barang','$deskripsi_barang','$spesifikasi_barang','$stock','$hrg_modal','$hrg_jual','$diskon','$status')") or die(mysql_error());

if($query){
	header('location:data_barang.php');
}
?>