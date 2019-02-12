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
    <a href="home.php">HOME/LOGIN</a>
    <a href="tampil_barang.php">Data Barang</a>
    <a href="pembelian.php">Keranjang</a>
    <a href="history_bayar.php">History Pembayaran</a>
  </div>
</div>
	</div>
<?php
}else{?>
			<font color="#AC090C"><h3> ANDA BELUM LOGIN </h3></font>
<?php
}
?>

<div class="sidebar">
	<br><br>
		<div class="font">
		<?php
if(ISSET($_SESSION['admin'])){ ?>
<h2>MENU</h2>
	<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a>
	<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['super_admin'])){ ?>
<h2>MENU</h2>
	<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a>
	<a href="history.php"><button class="button button2">History </button></a>
	<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['member'])){ ?>
<h2>MENU</h2>
	<a href="home_2.php"><button class="button button1">Home </button></a><br>
	<a href="pembelian.php"><button class="button button1">Keranjang </button></a><br>
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

<?php if (isset($_SESSION['admin'])) { ?>
<h1><center>DATA BARANG</center></h1>
<table border="3" cellpadding="5" cellspacing="5">
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
	$query = mysqli_query($con, "select * from tbl_barang");
	$no = 1;
	while($data = mysqli_fetch_array($query))
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
	
	$no++;
	} 
	?>
	<tr>
		<td colspan="10"><center><a href="tambah_barang.php">TAMBAH BARANG</a></center></td>
	</tr>
</table>

<?php }
	else if (isset($_SESSION['super_admin'])) { ?>
	
	<h1><center>DATA BARANG</center></h1>
<table border="3" cellpadding="5" cellspacing="5">
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
	$query = mysqli_query($con, "select * from tbl_barang");
	$no = 1;
	while($data = mysqli_fetch_array($query))
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
	
	$no++;
	} 
	?>
	<tr>
		<td colspan="10"><center><a href="tambah_barang.php">TAMBAH BARANG</a></center></td>
	</tr>
</table>
<?php }
	else if (isset($_SESSION['member'])) { ?>
	
	<h1><center>DATA BARANG</center></h1>
<table border="3" cellpadding="5" cellspacing="5">
	<tr>
		<th>KODE BARANG</th>
		<th>DESKRIPSI BARANG</th>
		<th>SPESIFIKASI BARANG</th>
		<th>STOCK</th>
		<th>HARGA</th>
		<th>DISKON</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php
	$query = mysqli_query($con, "select * from tbl_barang where status like 1");
	$no = 1;
	while($data = mysqli_fetch_array($query))
	{
	?>
		<tr>
			<td><?php echo $data['kd_barang'];  ?></td>
			<td><?php echo $data['deskripsi_barang'];  ?></td>
			<td><?php echo $data['spesifikasi_barang'];  ?></td>
			<td><?php echo $data['stock'];  ?></td>
			<td><?php echo $data['hrg_jual']; ?></td>
			<td><?php echo $data['diskon']; ?></td>
			<td><a href="beli_barang.php?kd_barang=<?php echo $data['kd_barang']; ?>">BELI</td>
		</tr>
		<?php
	
	$no++;
	} 
	?>
</table>

<?php }
		else { ?>
			<h1><center>Anda Belum Login...<a href="home.php"><button class="button button1">HOME/LOGIN</button></a>
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