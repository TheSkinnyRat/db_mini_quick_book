<?php
include ('config.php');

$kd_barang = $_POST['kd_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$spesifikasi_barang = $_POST['spesifikasi_barang'];
$stock = $_POST['stock'];
$hrg_modal = $_POST['hrg_modal'];
$hrg_jual = $_POST['hrg_jual'];
$diskon = $_POST['diskon'];
$status = $_POST['status'];

$query = mysqli_query($con, "update tbl_barang set deskripsi_barang='$deskripsi_barang', spesifikasi_barang='$spesifikasi_barang', stock='$stock', hrg_modal='$hrg_modal', hrg_jual='$hrg_jual', diskon='$diskon', status='$status' where kd_barang='$kd_barang'") or die(mysqli_error());

if($query){
	header('location:data_barang.php');
}
?>