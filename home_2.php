<?php session_start();
include('config.php');
?>
<html>
<head>
	<title>Mini Quick Book</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body bgcolor="#0D9F5">
<h1><center>HOME</center></h1><hr>
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
			<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a><br>
			<a href="tampil_barang.php"><button class="button button1">Tampil Barang </button></a><br>
			<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['super_admin'])){ ?>
<h2>MENU</h2>
		<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a><br>
		<a href="tampil_barang.php"><button class="button button1">Tampil Barang </button></a><br>
		<a href="history.php"><button class="button button2"> History </button></a><br>
		<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['member'])){ ?>
<h2>MENU</h2>
		<a href="tampil_barang.php"><button class="button button1">Data Barang</button></a><br>
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
<h1>Selamat Datang...</h1>
<?php
	echo "<h2><strong><font color=blue>".$_SESSION['admin']."</h2></strong></font><p>";
}
	else if (isset($_SESSION['super_admin'])) { ?>
	<h1>Welcome...</h1>
	<?php
	echo "<h2><strong><font color=blue>".$_SESSION['super_admin']."</h2></strong></font><p>";
}
	else if (isset($_SESSION['member'])) { ?>
	<h1>HAI...</h1>
	<?php
	echo "<h2><strong><font color=blue>".$_SESSION['member']."</h2></strong></font><p>";
}
		else { ?>
			<h1><center>Anda Belum Login... <a href="home.php"><button class="button button1">HOME/LOGIN</button></a>
	}
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