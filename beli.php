<?php
include ('config.php');

$kd_pembelian = $_POST['kd_pembelian'];
$pembeli = $_POST['pembeli'];
$kd_barang = $_POST['kd_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$spesifikasi_barang = $_POST['spesifikasi_barang'];
$stock = $_POST['stock'];
$jumlah = $_POST['jumlah'];
$harga_satuan = $_POST['harga_satuan'];
$harga_total = $_POST['harga_total'];

if ($jumlah <= 0 ) { ?>

	<script language="javascript">alert("PEMBELIAN MINIMAL 1 UNIT");
			document.location='beli_barang.php?kd_barang=<?php echo $kd_barang ?>'</script>
<?php } else {

if ($jumlah > $stock){ ?>
	<script language="javascript">alert("STOCK KURANG");
			document.location='beli_barang.php?kd_barang=<?php echo $kd_barang ?>'</script>
<?php  } else {

$query = mysqli_query($con, "insert into tbl_beli (kd_pembelian,pembeli, kd_barang, deskripsi_barang,spesifikasi_barang,jumlah,harga_satuan,harga_total) values ('$kd_pembelian','$pembeli','$kd_barang','$deskripsi_barang','$spesifikasi_barang','$jumlah','$harga_satuan','$harga_total')") or die(mysqli_error());

if($query){ ?>
	<script language="javascript">alert("BARANG BERHASIL DIMASUKKAN KE KERANJANG");
			document.location='tampil_barang.php'</script>
 <?php } 
}
}
?>