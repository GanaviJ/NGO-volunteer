<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>NGO Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<style>
		btn{
			width: 30px;
		}
	</style>
</head>
<?php
        include 'includes/header.php';
        ?>
<body>
	
	<div class="form1">
            <form name="form" method="post" action="ngoscript.php">
	    <div><h1>NGO SIGNUP</h1></div>
		<div class="inform">  
		<input type="text" name="name" placeholder="Full name of the NGO" class="name" required="true"></br></div>
		<div class="inform">  
                <input type="text" name="phone_num" placeholder="Phone Number" class="phone_number" required><br></div>
		<div class="inform">  
                <input type="text" name="email" placeholder="Email" class="email" required="true"><br></div>
		<div class="inform">  
		<input type="password" name="password" placeholder="Create Password" class="password" required="true"><br></div>
		<div class="inform">  
		<input type="number" name="no_of_branches" placeholder="No: of Branches" class="no_of_branches" required="true"><br></div>
                <div class="inform">  
		<input type="number" name="year_of_estab" placeholder="Year of Establishment" class="establishment" required="true"><br></div>
		<div class="inform vert"> 
                <div class="inform">
                <input type="text" name="locality" placeholder="Locality" class="establishment" required="true"><br> </div>
                 <div class="inform">
                <input type="text" name="city" placeholder="City" class="establishment" required="true"><br></div>
                <div class="inform">
                <input type="text" name="state" placeholder="State" class="establishment" required="true"><br> </div>
                 <div class="inform">
                <input type="text" name="country" placeholder="Country" class="establishment" required="true"><br> </div>
                <div class="inform">  
                <input type="text" name="pincode" placeholder="Pincode" class="establishment" required="true"><br></div>
		<input class="box" type="text" name="skills" placeholder="Skills" class="skills" >
		<input class="btn" type="button" name="add_values" value="+" class="add_values" ><br> </div>
		<div class="inform"> 
		<input type="number" name="hours" placeholder="No: of hours to devote" class="no_of_hours"></div>
                <div class="inform"> 
                <input type="text" name="donation" placeholder="Donation amount" class="no_of_hours"></div>
	   <div class=""><a href=""><input type="submit" value="Submit" class="butn"></a></div>
	</form></div>
    
</body>

</html>