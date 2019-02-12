<!DOCTYPE html>
<html>
<head>
	<title>TOKO</title>
</head>
<body>
<h1>TAMBAH BARANG</h1>
<form action="tambah.php" method="POST">
	KODE BARANG : <input type="text" name="kd_barang" required><br>
	DESKRIPSI BARANG : <input type="text" name="deskripsi_barang" required><br>
	SPESIFIKASI BARANG : <input type="text" name="spesifikasi_barang" required><br>
	STOCK : <input type="text" name="stock" required><br>
	HARGA MODAL : <input type="text" name="hrg_modal" required><br>
	HARGA JUAL : <input type="text" name="hrg_jual" required><br>
	DISKON : <input type="text" name="diskon" ><br>
	STATUS: <input type="text" name="status" required><br>
	<input type="submit" name="submit" value="TAMBAH"> 
</form>
</body>
</html>