<?php

//print_r($_POST);exit;
$conn=new mysqli('localhost','root','','ngo_marketplace');
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
$stmt=$conn->prepare("INSERT INTO user(name,password,email,blood_group,phoneNum,dob,gender,city,hours_available)values(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param( "ssssiissi",$name,$password,$email,$blood_group,$phoneNum,$dob,$gender,$city,$hours_available);
print_r($stmt);exit;
/*$name=$_POST["name"];
$password=$_POST["password"];
$email=$_POST["email"];
$blood_group=$_POST["blood_group"];
$phoneNum=$_POST["PhoneNum"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$hours_available=$_POST["hours_available"];*/
$name=(isset($_GET['name'])?$_GET['name']:'');
$password=(isset($_GET['password'])?$_GET['password']:'');
$email=(isset($_GET['email'])?$_GET['email']:'');
$blood_group=(isset($_GET['blood_group'])?$_GET['blood_group']:'');
$phoneNum=(isset($_GET['phoneNum'])?$_GET['phoneNum']:'');
$dob=(isset($_GET['dob'])?$_GET['dob']:'');
$gender=(isset($_GET['gender'])?$_GET['gender']:'');
$city=(isset($_GET['city'])?$_GET['city']:'');
$hours_available=(isset($_GET['hours_available'])?$_GET['hours_available']:'');
header("location:volunteerhomepage.php");
$stmt->close();
$conn->close();
?>
/*$name=(isset($_GET['name'])?$_GET['name']:'');
$password=(isset($_GET['password'])?$_GET['password']:'');
$email=(isset($_GET['email'])?$_GET['email']:'');
$blood_group=(isset($_GET['blood_group'])?$_GET['blood_group']:'');
$phoneNum=(isset($_GET['phoneNum'])?$_GET['phoneNum']:'');
$dob=(isset($_GET['dob'])?$_GET['dob']:'');
$gender=(isset($_GET['gender'])?$_GET['gender']:'');
$city=(isset($_GET['city'])?$_GET['city']:'');
$hours_available=(isset($_GET['hours_available'])?$_GET['hours_available']:'');
$skills=(isset($_GET['skills'])?$_GET['skills']:'');
$donation=(isset($_GET['donation'])?$_GET['donation']:'');*/


