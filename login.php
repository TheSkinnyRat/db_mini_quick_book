<?php session_start();
include "config.php";

$user=$_POST['user'];
$pass=$_POST['pass'];
$query=mysqli_query($con, "select * from tbl_login where ux_user='$user' and ux_pass='$pass'");
$cek=mysqli_num_rows($query);

if($cek){
	$row = mysqli_fetch_assoc($query);
	if($row['ux_akses'] == 'admin'){
	$_SESSION['admin']=$user;
		header("location: home_2.php");
		}
	else if ($row['ux_akses'] == 'member') {
		$_SESSION['member']=$user;
		header("location: home_2.php");
	}
	else{
	$_SESSION['super_admin']=$user;
		header("location: home_2.php");
		}
	
}else{
		?>
		<script language="javascript">alert("Username/Password SALAH");
			document.location='home.php'</script><?php
		}

?>