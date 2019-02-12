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
if(ISSET($_SESSION['admin'])){ ?>
<h2>MENU</h2>
			<a href="tampil_barang.php"><button class="button button1">Tampil Barang</button></a>
			<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['super_admin'])){ ?>
		<a href="tampil_barang.php"><button class="button button1">Tampil Barang</button></a>
		<a href="history.php"><button class="button button2">History </button></a>
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
<?php if (isset($_SESSION['admin']) || isset($_SESSION['super_admin']) ) { ?>

<h1>EDIT DATA BARANG</h1>
<?php
$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($con, "select * from tbl_barang where kd_barang='$kd_barang'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
?>
<form action="edit.php" method="post">
<pre>
<input type="hidden" name="kd_barang" value="<?php echo $data['kd_barang']; ?>">
KODE BARANG 		: <input type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>" disabled><br>
DESKRIPSI BARANG 	: <input type="text" name="deskripsi_barang" value="<?php echo $data['deskripsi_barang']; ?>"><br>
SPESIFIKASI BARANG 	: <input type="text" name="spesifikasi_barang" value="<?php echo $data['spesifikasi_barang']; ?>"><br>
STOCK 			: <input type="number" name="stock" value="<?php echo $data['stock']; ?>"><br>
HARGA MODAL 		: <input type="text" name="hrg_modal" value="<?php echo $data['hrg_modal']; ?>"><br>
HARGA JUAL 		: <input type="text" name="hrg_jual" value="<?php echo $data['hrg_jual']; ?>"><br>
DISKON 			: <input type="text" name="diskon" value="<?php echo $data['diskon']; ?>"><br>
STATUS 			: <select name="status">
					<option selected hidden value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
					<option value="0">0</option>
					<option value="1">1</option>
					</select>
<button type="submit" name="submit" class="button button1">EDIT</button>
</pre>
</form>
<?php }
	
		else { ?>
			<h1><center>Anda Belum Login... <a href="home.php"><button class="button button1">HOME/LOGIN</button></a>
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