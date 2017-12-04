
<!DOCTYPE html>
<html>
<head>
	<title>Ngo sign up</title>
	
	<style>
		btn{
				
			width: 30px;
		}
		
fieldset{


padding: 50px;
text-align:left;

}
h1{
	text-align: center;
}

.inform {
	display:flex;
	flex-direction: column;
	width: 250px;
	margin: 7px;
	height: 20px;
}
.vert{
	display: flex;
	flex-direction: row;
}

.box{
	width: 250px;
}
.btn{
	
	width:20px ;
}
.form1{
	text-align: right;

}

	</style>
</head>
<body>
	<h1>NGO SIGNUP</h1>
	<div class="form1">
		<form name="form" method="post" action="volscript.php">
	   <fieldset>
		       <legend>Personal Information</legend>
		       <div class="formbox " >
		       <div class="inform">  
		       <input type="text" name="name" placeholder="Full name of the NGO" required ></br></div>
			<div class="inform">  
		       <input type="text" name="gender" placeholder="gender" required ></br></div>
		       <div class="inform">  
		       <input type="text" name="email" placeholder="Email"><br></div>
		       <div class="inform">  
		       <input type="password" name="password" placeholder="Create Password" required><br></div>
                       <div class="inform">  
		       <input type="date" name="dob" placeholder="dob" required><br></div>
                       <div class="inform">  
		       <input type="text" name="blood_group" placeholder="blood group" required><br></div>	  
		       <div class="inform">  
		       <input type="text" name="phoneNum" placeholder="Phone Number" required><br></div>
			<div class="inform">
			<input type="text" name="city" placeholder="city" required><br></div>
	                <div class="inform vert"> 
		       <input class="box" type="text" name="skills" placeholder="Skills" >
		       <input class="btn" type="button" name="add_values" value="+" ><br> </div>
		       <div class="inform"> 
		       <input type="number" name="donation" placeholder="donation"></div>
                       <div class="inform"> 
		       <input type="number" name="hours_available" placeholder="no of hours available per day"></div> 
			<div class="inform">
			<input type="submit" name="submit">
			</div>
		   </div>
	   </fieldset>
	</form></div>
</body>
</html>








