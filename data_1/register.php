<?php session_start();
include('config.php');
?>

<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body bgcolor="#0D9F5D">
<h1><center>FORM REGISTER</center></h1><hr>

	<div class="menuatas">
		<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    <a href="home.php">HOME/LOGIN</a>
  </div>
</div>
	</div>
		
<?php
if(ISSET($_SESSION['admin'])){
header("location:home_2.php");
	
}else if (ISSET($_SESSION['super_admin'])){
header("location:home_2.php");

}else if(ISSET($_SESSION['member'])){
header("location:home_2.php");


}else{?>
	<div class="content1">
		<div class="font" align="center">
	<h2>Register</h2>
		<form action="registerp.php" method="post">
    <table>
    	<tr>
        <td>Username</td>
        <td><input type="text" name="ux_user" size="20" required></td>
        </tr>
        <tr>
        <td>Password</td>
        <td><input type="password" name="ux_pass" size="20" required></td>
        </tr>
        <tr>
			<td><button class="button button1" type="submit" name="Register" value="Daftar" required>DAFTAR</td>
        </tr>
    </table>
    </form>
<?php
	 } //--------------------------------------------------------------------------------------------------------
		?>
		</div>
	</div>
	<div class="footer">
	<div class="font">
		</div>
	</div>
</table>
</body>
</html>