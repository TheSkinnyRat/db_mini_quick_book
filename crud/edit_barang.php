<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TOKO</title>
</head>
<body>
<h1>EDIT DATA BARANG</h1>
<?php
$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($con, "select * from tbl_barang where kd_barang='$kd_barang'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
?>
<form action="edit.php" method="post">
<input type="hidden" name="kd_barang" value="<?php echo $data['kd_barang']; ?>">
KODE DOKTER 	: <input type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>" disabled><br>
DESKRIPSI BARANG 	: <input type="text" name="deskripsi_barang" value="<?php echo $data['deskripsi_barang']; ?>"><br>
SPESIFIKASI BARANG 	: <input type="text" name="spesifikasi_barang" value="<?php echo $data['spesifikasi_barang']; ?>"><br>
STOCK 		: <input type="number" name="stock" value="<?php echo $data['stock']; ?>"><br>
HARGA MODAL 	: <input type="text" name="hrg_modal" value="<?php echo $data['hrg_modal']; ?>"><br>
HARGA JUAL : <input type="text" name="hrg_jual" value="<?php echo $data['hrg_jual']; ?>"><br>
DISKON : <input type="text" name="diskon" value="<?php echo $data['diskon']; ?>"><br>
STATUS : <input type="text" name="status" value="<?php echo $data['status']; ?>"><br>
<input type="submit" name="submit" value="simpan">
</form>
</body>
</html>