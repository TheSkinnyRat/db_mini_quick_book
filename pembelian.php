<?php session_start();
include('config.php');
?>

<html>
<head>
	<title>Mini Quick Book</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body bgcolor="#0D9F5">
<h1><center>Mini Quick Book</center></h1><hr>
<?php
if(ISSET($_SESSION['admin'])){ ?>
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
<?php
}else if(ISSET($_SESSION['super_admin'])){ ?>
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
<?php
}else if(ISSET($_SESSION['member'])){ ?>
	<div class="menuatas">
		<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    <a href="home_2.php">HOME/LOGIN</a>
    <a href="tampil_barang.php">Data Barang</a>
    <a href="pembelian.php">Keranjang</a>
    <a href="history_bayar.php">History Pembayaran</a>
  </div>
</div>
	</div>
<?php
}else{?>
<?php
}
?>

<div class="sidebar">
	<br><br>
		<div class="font">
		<?php
if(ISSET($_SESSION['member'])){ ?>
<h2>MENU</h2>
		<a href="home_2.php"><button class="button button1">Home </button></a><br>
		<a href="tampil_barang.php"><button class="button button1">Data Barang </button></a><br>
		<a href="history_bayar.php"><button class="button button5"> History Pembayaran </button></a><br>
		<a href="logout.php"><button class="button button3"> LogOut </button></a>
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
		<th>KODE PEMBELIAN</th>
		<th>KODE BARANG</th>
		<th>NAMA PEMBELI</th>
		<th>DESKRIPSI BARANG</th>
		<th>SPESIFIKASI BARANG</th>
		<th>JUMLAH</th>
		<th>HARGA SATUAN</th>
		<th>HARGA TOTAL</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php
	$member = $_SESSION['member'];
	$query = mysqli_query($con, "select * from tbl_beli where pembeli = '$member' ");
	$no = 1;
	while($data = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $data['kd_pembelian'];  ?></td>
			<td><?php echo $data['kd_barang'];  ?></td>
			<td><?php echo $data['pembeli'];  ?></td>
			<td><?php echo $data['deskripsi_barang'];  ?></td>
			<td><?php echo $data['spesifikasi_barang'];  ?></td>
			<td><?php echo $data['jumlah'];  ?></td>
			<td><?php echo $data['harga_satuan']; ?></td>
			<td><?php echo $data['harga_total']; ?></td>
			<td><a href="bayar.php?kd_pembelian=<?php echo $data['kd_pembelian']; ?>">BAYAR</td>
		</tr>
		<?php
	
	$no++;
	} 
	?>
</table>

<?php }
		else { ?>
			<h1><center>Anda Belum Login...<a href="home.php"><button class="button button1">LOGIN</button></a>
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