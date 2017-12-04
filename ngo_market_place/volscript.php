<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ngo_marketplace');
$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$phoneNum=$_POST["phoneNum"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$hours_available=$_POST["hours_available"];
$blood_groups=$_POST["blood_groups"];
$skills=$_POST["skills"];
$donation=$_POST["donation"];
if(!$con)
{
   echo "<br><br><br><center>invalid data</center>";
}
else
{
$var="insert into users(name,password,email,phoneNum,dob,gender,city,hours_available,blood_groups) values('$name','$password','$email','$phoneNum','$dob','$gender','$city','$hours_available','$blood_groups')";
if(mysqli_query($con,$var))
{
$last_id = mysqli_insert_id($con);
$vars="insert into user_skills(skills,users_id) values('$skills','$last_id')";
mysqli_query($con,$vars);
$vard="insert into user_donations(donation,users_id) values('$donation','$last_id')";
mysqli_query($con,$vard);
}
header("location:homepage.php");
}
?>