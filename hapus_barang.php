<?php
include "config.php";
$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($con, "delete from tbl_barang where kd_barang='$kd_barang'");
if ($query){ ?>
	<script language="javascript">alert("Barang Berhasil Dihapus");
			document.location='tampil_barang.php'</script>
<?php } ?>