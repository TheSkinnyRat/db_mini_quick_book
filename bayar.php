<?php
include "config.php";
$kd_pembelian = $_GET['kd_pembelian'];
$query = mysqli_query($con, "delete from tbl_beli where kd_pembelian='$kd_pembelian'");
if ($query){ ?>
	<script language="javascript">alert("Barang Berhasil DIBAYAR");
			document.location='pembelian.php'</script>
<?php } ?>