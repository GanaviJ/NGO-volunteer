<?php
require 'includes/common.php';
//$con=mysqli_connect('localhost','root','');
//mysqli_select_db($con,'ngo_marketplace');
//session_start();
$mail=$_SESSION['email'];
//$con=new PDO("mysqli:host="localhost";dbname="ngo_marketplace","root","");
$sql="select id, email from users where email='$mail'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	$udel="DELETE FROM users WHERE email='$mail'";
	$udelres=mysqli_query($con,$udel);
	echo "deleted";
}

if(mysqli_num_rows($res)==0)
{
	$ndel="DELETE FROM ngo WHERE email='$mail'";
	$ndelres=mysqli_query($con,$ndel);
	//echo "deleted";
}



//$res->setFetchMode(PDO::FETCH_ACCOC);
//$res->execute();
?>