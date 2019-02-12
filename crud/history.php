<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TOKO</title>
</head>
<body>
<h1><center>DATA BARANG</center></h1>
<center>
	<a href="data_barang.php">BACK</a>
<table border="3" cellpadding="5" cellspacing="5" width="1200">
	<tr>
		<th>NO</th>
		<th>Keterangan</th>
		<th>Waktu</th>
		<th>User</th>
		<th>Data Lama</th>
		<th>Data Baru</th>
	</tr>
	<?php
	$query = mysqli_query($con, "select * from tbl_log");
	$no = 1;
	while($data = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $no;  ?></td>
			<td><?php echo $data['ket'];  ?></td>
			<td><?php echo $data['datetime'];  ?></td>
			<td><?php echo $data['user'];  ?></td>
			<td><?php echo $data['old_data']; ?></td>
			<td><?php echo $data['new_data']; ?></td>
			
		</tr>
		<?php
$no++ ;
	}
	
	?>
</table>

</body>
</html>