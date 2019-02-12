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
<?php if (isset($_SESSION['admin']) || isset($_SESSION['super_admin'])) { ?>

<h1>TAMBAH BARANG</h1>
<form action="tambah.php" method="POST">
<pre>
KODE BARANG 		: <input type="text" name="kd_barang" required><br>
DESKRIPSI BARANG 	: <input type="text" name="deskripsi_barang" required><br>
SPESIFIKASI BARANG 	: <input type="text" name="spesifikasi_barang" required><br>
STOCK 			: <input type="text" name="stock" required><br>
HARGA MODAL 		: <input type="text" name="hrg_modal" required><br>
HARGA JUAL 		: <input type="text" name="hrg_jual" required><br>
DISKON 			: <input type="text" name="diskon" ><br>
STATUS  		: <select name="status">
					<option value="0">0</option>
					<option value="1">1</option>
					</select>
</pre>
	<button class="button button1" type="submit" name="submit">TAMBAH</button>
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