<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TOKO</title>
</head>
<body>
<h1><center>DATA BARANG</center></h1>
<center>
<table border="3" cellpadding="5" cellspacing="5" width="1200">
	<tr>
		<th>KODE BARANG</th>
		<th>DESKRIPSI BARANG</th>
		<th>SPESIFIKASI BARANG</th>
		<th>STOCK</th>
		<th>HARGA MODAL</th>
		<th>HARGA JUAL</th>
		<th>DISKON</th>
		<th>STATUS</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php
	$query = mysql_query("select * from tbl_barang");
	$no = 1;
	while($data = mysql_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $data['kd_barang'];  ?></td>
			<td><?php echo $data['deskripsi_barang'];  ?></td>
			<td><?php echo $data['spesifikasi_barang'];  ?></td>
			<td><?php echo $data['stock'];  ?></td>
			<td><?php echo $data['hrg_modal']; ?></td>
			<td><?php echo $data['hrg_jual']; ?></td>
			<td><?php echo $data['diskon']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><a href="hapus_barang.php?kd_barang=<?php echo $data['kd_barang']; ?>">HAPUS</td>
			<td><a href="edit_barang.php?kd_barang=<?php echo $data['kd_barang']; ?>">EDIT</td>
		</tr>
		<?php
	}
	$no++
	?>
	<tr>
		<td colspan="10"><center><a href="tambah_barang.php">TAMBAH BARANG</a></center></td>
	</tr>
</table>

</body>
</html>