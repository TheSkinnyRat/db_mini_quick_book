<?php session_start();
include "config.php";

$ux_user=$_POST['ux_user'];
$ux_pass=$_POST['ux_pass'];
$query=mysqli_query($con, "insert into tbl_login (ux_user, ux_pass) values ('$ux_user', '$ux_pass')") or die(mysql_error());

if($query){

?>
		<script language="javascript">alert("Akun Telah Terdaftar");
			document.location='home.php'</script>
<?php
		}

?>