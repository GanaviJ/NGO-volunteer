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
	
    <title>ngo homepage</title>
    <link rel="stylesheet" type="text/css" href="ngohomepage.css">
</head>
<body>
   
    	<div style="padding-top:70px">
        <?php
        	include 'includes/header.php';
		$email=$_SESSION['email'];
		$var="(select u.name as Name,u.email as Email,u.phoneNum as Phone_number
       		from users u where u.id in (select distinct(us.users_id) as IDD
    		from user_skills us where us.skills in (select ns.skills as skil
      		from ngo_skills ns where ns.ngo_id in (select n.id as Id
     		from ngo n where n.id=(select id as ID from ngo where email='$email')))))";
		$tabs=mysqli_query($con,$var);
		if(!$tabs || mysqli_num_rows($tabs)==0)
		{
		      echo "no rows";
		      echo " ";
		}
		else
		{
		      echo "Volunteers's who have the required SKILLS:";
		      echo "<table><tr><th>NAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>";
		      while($check=mysqli_fetch_assoc($tabs))
		      {
		            echo "<tr><td>".$check["Name"]."</td><td>".$check["Email"]."</td><td>".$check["Phone_number"]."</td></tr>";
	              }
		echo "</table>";
		echo "<br>";
		}

		//$result=mysql_query("call display_ngo();");
		$vars="(select u.name as Name,u.email as Email,u.phoneNum as Phone_number
       		from users u where u.id in (select distinct(us.users_id) as IDD
    		from user_skills us where us.skills in (select ns.skills as skil
      		from ngo_skills ns where ns.ngo_id in (select n.id as Id
     		from ngo n where n.id=(select id as ID from ngo where email='$email')))))";
				//print_r($vars);exit;
				$tabss=mysqli_query($con,$vars);
				//print_r($tabss);exit;
			if(!$tabss || mysqli_num_rows($tabss)==0)
			{
		      echo "no rows";
			}
			else
			{
		    	 echo "Volunteers's who have the required amount of donation";
		    	 echo "<table><tr><th>NAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>";
		      	while($checks=mysqli_fetch_assoc($tabss))
		      	{
		           echo "<tr><td>".$checks["Name"]."</td><td>".$checks["Email"]."</td><td>".$checks["Phone_number"]."</td></tr>";
		            //echo $checks["IDD"];
	            }
			echo "</table>";
			}

	?>
    	</div>
    	<div class="foot1">
		<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><input type="submit" class="Email" value="Email"></a>
                <a href="about.php"><input type="submit" class="About" value="About"></a>
                <a href="terms.php"><input type="submit" class="Terms" value="Terms"></a>
	</div>
</body>
</html>
