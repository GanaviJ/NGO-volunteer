<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="signin.css">
</head>
<?php
        include 'includes/header.php';
        ?>
<body>
<div class="box">
	
    <div class="forms">
        <form method="post" action="ngosign_script.php">
			<div class="loginLabel"><h1>Please Login</h1></div>
                        <div class="text"><input  type="email" class="text1" name="email" placeholder="Email ID" required></div>
			<div class="text"><input  type="password"  class="text1" name="password" placeholder="PassWord" required></div>
                        
                        <button type="submit" name="submit" class="button">Login</button>
                        <!--<?php echo $_GET['error']; ?>-->
        </form>
    </div>
</div>
</body>

</html>