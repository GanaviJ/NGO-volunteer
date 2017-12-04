<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
	
    <title>volunteer homepage</title>
    <link rel="stylesheet" type="text/css" href="volunteerhomepage.css">
</head>
<body>
	<div style="padding-top:70px, padding-bottom:150px">

        <?php
        	include 'includes/header.php';
		$emails=$_SESSION['email'];
		//print_r($emails);exit;
		$var="(select n.name as Name,n.email as Email,n.phone_num  as  Phone_number
       		from ngo n where n.id in (select distinct(ns.ngo_id) as IDD
    		from ngo_skills ns where ns.skills in (select us.skills as skil
      		from user_skills us where us.users_id  in(select u.id as Id
     		from users u where u.id=(select id as ID from users where email='$emails')))))";
		$tabs=mysqli_query($con,$var);
		if(!$tabs || mysqli_num_rows($tabs)==0)
		{
		      echo "no rows";
		}
		else
		{
			  echo "<h1><b>NGO's which require your SKILLS:</b></h1>";	
		      echo "<table><tr><th>NAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>";
		      while($check=mysqli_fetch_assoc($tabs))
		      {
			   // echo $check["Name"];
			    //echo $check["Email"];
			    //echo $check["Phone_number"];
		            echo "<tr><td>".$check["Name"]."</td><td>".$check["Email"]."</td><td>".$check["Phone_number"]."</td></tr>";
	              }
		echo "</table>";
		echo "<br>";
		}
		$vars="select n.name as Name,n.email as Email,n.phone_num  as  Phone_number
       		from ngo n where n.id in (select distinct(nd.ngo_id) as IDD
    		from ngo_donations nd where nd.donation in (select ud.skills as don
      		from user_donations ud where ud.users_id  in(select u.id as Id
     		from users u where u.id=(select id as ID from ngo where email='$emails')))))";
		$tabss=mysqli_query($con,$var);
		if(!$tabss || mysqli_num_rows($tabss)==0)
		{
		      echo "no rows";
		}
		else
		{
			  echo "<h1><b>NGO's which require your donation amount:</b></h1>";
		      echo "<table><tr><th>NAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>";
		      while($checks=mysqli_fetch_assoc($tabss))
		      {
			   // echo $check["Name"];
			    //echo $check["Email"];
			    //echo $check["Phone_number"];
		            echo "<tr><td>".$checks["Name"]."</td><td>".$checks["Email"]."</td><td>".$checks["Phone_number"]."</td></tr>";
	              }
		echo "</table>";
		echo "<br>";
		}
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'ngo_marketplace');
		$result = mysqli_query($con,'CALL display_ngo()');
		if(!$result || mysqli_num_rows($result)==0)
		{
		      echo "no rows";
		}
		else
		{
			echo "<h2><b>Some other NGO's you might be interested in are:</b></h2>";
			echo "<table><tr><th>NAME</th><th>EMAIL</th></tr>";
			while ($row = mysqli_fetch_array($result))
			{   
     			 echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td></tr>";
     		}
 		}
	?>
    	</div>
	
	
</body>
<div class="foot1">
		<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><input type="submit" class="Email" value="Email"></a>
		<a href="about.html"><input type="submit" class="About" name="" value="About"></a>
		<a href="terms.html"><input type="submit" class="Terms" name="" value="Terms"></a>
	</div>
</html>