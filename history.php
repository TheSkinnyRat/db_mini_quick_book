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
			<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a>
			<a href="tampil_barang.php"><button class="button button1">Tampil Barang</button></a>
			<a href="logout.php"><button class="button button5"> LogOut </button></a>
<?php
}else if(ISSET($_SESSION['super_admin'])){ ?>
		<a href="tambah_barang.php"><button class="button button1">+ Tambah Barang </button></a>
		<a href="tampil_barang.php"><button class="button button1">Tampil Barang</button></a><br>
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

<?php 
	if (isset($_SESSION['super_admin'])) { ?>
	
	<h1><center>HISTORY</center></h1>
<center>
<table border="3" cellpadding="5" cellspacing="5">
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
	
	<?php }
		else if (isset($_SESSION['admin'])) { ?>
			<h1><center>Anda Tidak Login Sebagai Super Admin... <a href="home.php"><button class="button button1">HOME/LOGIN</button></a>
</center></h1>
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