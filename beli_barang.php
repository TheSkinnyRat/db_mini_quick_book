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
    <a href="home_2.php">HOME/LOGIN</a>
    <a href="tampil_barang.php">Data Barang</a>
    <a href="pembelian.php">Pembelian</a>
  </div>
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
		<a href="tampil_barang.php"><button class="button button1">Data Barang </button></a><br>
		<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php }else{?>
			<font color="#AC090C"><h3> ANDA BELUM LOGIN </h3></font>
<?php
}
?>
		</div>
	</div>
	<div class="content">
	<div class="font">
<?php if (isset($_SESSION['member'])) { ?>

<h1>Beli Barang</h1>
<?php
$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($con, "select * from tbl_barang where kd_barang='$kd_barang'") or die(mysqli_error());
$data = mysqli_fetch_array($query);
?>
<form action="beli.php" method="post">
<pre>

<input type="hidden" name="kd_pembelian" value="">
PEMBELI 		: <input name="pembeli" value="<?php echo $_SESSION['member']; ?>"  readonly>

KODE BARANG 		: <input type="text" name="kd_barang" value="<?php echo $data['kd_barang']; ?>" readonly><br>
DESKRIPSI BARANG 	: <input type="text" name="deskripsi_barang" value="<?php echo $data['deskripsi_barang']; ?>" readonly><br>
SPESIFIKASI BARANG 	: <input type="text" name="spesifikasi_barang" value="<?php echo $data['spesifikasi_barang']; ?>" readonly><br>
STOCK 			: <input type="number" name="stock" value="<?php echo $data['stock']; ?>" readonly><br>
HARGA 	 		: <input type="text" id="no1" onKeyUp="hitung1()" name="harga_satuan" value="<?php echo $data['hrg_jual']; ?>" readonly><br>
DISKON 			: <input type="text" id="no3" value="<?php echo $data['diskon']; ?>" readonly><br>

JUMLAH BELI 	: <input type="number" id="no2" onKeyUp="hitung1()" name="jumlah" required><br>
<font color="#FF0004">HARGA TOTAL 	: </font><input type="text" id="no4" name="harga_total" readonly><br>
<button type="submit" style="width: 350" name="submit" class="button button1">BELI</button>
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




<!--JAVA START------------------------------------------------------>
<script>
function hitung1() {
      var nomor1 = document.getElementById('no1').value;
      var nomor2 = document.getElementById('no2').value;
      var nomor3 = document.getElementById('no3').value;
      var ttl_diskon = parseInt(nomor1) * parseInt(nomor3) /100;
      var ttl_harga = parseInt(nomor1) - parseInt(ttl_diskon);
      var result = parseInt(ttl_harga) * parseInt(nomor2);
      if (!isNaN(result)) {
         document.getElementById('no4').value = result;
      }
}
	</script>
<!--JAVA END--------------------------------------------------------------->