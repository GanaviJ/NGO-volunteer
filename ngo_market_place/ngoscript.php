<?php
require 'includes/common.php';
//$con=mysqli_connect('localhost','root','');
//mysqli_select_db($con,'ngo_marketplace');
$name=$_POST["name"];
$phone_num=$_POST["phone_num"];
$email=$_POST["email"];
$password=$_POST["password"];
$no_of_branches=$_POST["no_of_branches"];
$year_of_estab=$_POST["year_of_estab"];
$hours=$_POST["hours"];
$locality=$_POST["locality"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$pincode=$_POST["pincode"];
$skills=$_POST["skills"];
$donation=$_POST["donation"];
if(!$con)
{
   echo "<br><br><br><center>invalid data</center>";
}
else
{
echo "record entered";
$var="insert into ngo(name,phone_num,email,password,no_of_branches,year_of_estab,hours) values('$name','$phone_num','$email','$password','$no_of_branches','$year_of_estab','$hours')";
if(mysqli_query($con,$var))
{
$last_id = mysqli_insert_id($con);
$vara="insert into ngo_address(locality,city,state,country,pincode,ngo_id) values('$locality','$city','$state','$country','$pincode','$last_id')";
mysqli_query($con,$vara);
$vars="insert into ngo_skills(skills,ngo_id) values('$skills','$last_id')";
mysqli_query($con,$vars);
$vard="insert into ngo_donations(donation,ngo_id) values('$donation','$last_id')";
mysqli_query($con,$vard);
}
$SESSION['email']=$email;
header("location:homepage.php");
}
?>