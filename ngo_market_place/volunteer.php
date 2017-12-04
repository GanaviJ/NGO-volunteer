<?php
require("includes/common.php");

?>
<html>
	<head>
		<title>Volunteer form</title>
		<link rel="stylesheet" type="text/css" href="volunteer.css">
	</head>
	<?php
        include 'includes/header.php';
        ?>
	<body>
            <form class="performs" method="POST" action="volscript.php">
					<h1>Personal Details</h1>
					
                                        <div class="inform">
                                        <input type="text" name="name" class="text ip" placeholder="Name" required></div>
					
                                        <div class="inform rad">
					<input type="radio" name="gender" class="radio ip" value="Male" ><span>Male</span>
					<input type="radio" name="gender" class="radio ip" value="Female"><span>Female</span></div>
					
                                        <div class="inform">
					<input type="email" name="email" class="email ip" placeholder="E-Mail ID" required></div>
					
					<div class="inform">
					<input type="password" name="password" class="password ip" placeholder="Password" required="true"></div>
					
                                        <div class="inform">
                                        <input type="date" name="dob" placeholder="dob" class="date" required="true"></div>
					
                                        <div class="inform">
					<select name="blood_groups" placeholder="blood_groups" class="blood_groups ip"  required="true">
						<option value="null"><span>Blood Groups</span></option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select></div>
					
                                        <div class="inform">
                                        <input type="text" name="phoneNum" class="inform ip" placeholder="contact" required></div>
					
                                        <div class="inform">
					<input type="text" name="city" class="inform ip"  placeholder="City" required></div>
					
		
					<h1>Technical Details</h1>
					
                                        <div class=""><input type="text" name="skills"  class= "text ip" placeholder="Skills" ></div>
					
                                        <div class=""><input type="text" name="donation" class= "text ip" placeholder="Donations" ></div>
					
										<div class=""><input type="number" name="hours_available" class="text ip" placeholder="No of hours available per day"></div>
			
                                        <div class=""><input type="submit" value="submit" type="submit" class="submit butn"></div>
		</form>
	</body>

</html>