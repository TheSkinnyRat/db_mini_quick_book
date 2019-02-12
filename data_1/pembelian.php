<?php session_start();
include('config.php');
?>
<html>
<head>
	<title>Mini Quick Book</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body bgcolor="#0D9F5">
<h1><center>Data Pembelian</center></h1><hr>
<div class="menuatas">
		<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    <a href="home.php">HOME/LOGIN</a>
    <a href="tampil_barang.php">Tampil Barang</a>
    <a href="tambah_barang.php">+ Tambah Barang</a>
  </div>
</div>
	</div>

<div class="sidebar">
	<br><br>
		<div class="font">
		<?php
if(ISSET($_SESSION['member'])){ ?>
<h2>MENU</h2>
		<a href="home_2.php"><button class="button button1">Home </button></a><br>
		<a href="pembelian.php"><button class="button button1">Pembelian </button></a><br>
		<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else{?>
			<font color="#AC090C"><h3> ANDA BELUM LOGIN </h3></font>
<?php
}
?>
		</div>
	</div>
	<div class="content">
	<div class="font">

<?php if (isset($_SESSION['member'])) { ?>
<h1><center>DATA PEMBELIAN</center></h1>
<table border="3" cellpadding="5" cellspacing="5">
	<tr>
		<th>KODE BARANG</th>
		<th>DESKRIPSI BARANG</th>
		<th>SPESIFIKASI BARANG</th>
		<th>JUMLAH</th>
		<th>HARGA SATUAN</th>
		<th>HARGA TOTAL</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php
	$query = mysqli_query($con, "select * from tbl_beli");
	$no = 1;
	while($data = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $data['kd_barang'];  ?></td>
			<td><?php echo $data['deskripsi_barang'];  ?></td>
			<td><?php echo $data['spesifikasi_barang'];  ?></td>
			<td><?php echo $data['jumlah'];  ?></td>
			<td><?php echo $data['harga_satuan']; ?></td>
			<td><?php echo $data['harga_total']; ?></td>
			<td><a href="#?kd_barang=<?php echo $data['kd_barang']; ?>">BAYAR</td>
		</tr>
		<?php
	
	$no++;
	} 
	?>
</table>

<?php }
		else { ?>
			<h1><center>Anda Belum Login... <a href="home.php"><button class="button button1">LOGIN</button></a>
</center></h1>
		<?php }  ?>
		</div>
	</div>
	<div class="footer">
	<div class="font">
		</div>
	</div>
</body>
</html>