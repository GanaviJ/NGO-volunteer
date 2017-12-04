<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: homepage.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Choosing</title>
	<link rel="stylesheet" type="text/css" href="chose.css">
        <link rel="stylesheet" type="text/css" href="volunteer.css">
</head>
<?php
        include 'includes/header.php';
        ?>
    <body>
        <div class="forms">
                <div class="loginLabel"><h1>Change password</h1></div>
                <form class="performs" action="settings_script.php" method="POST">
                    
                        <div class="inform">
                            <input type="password" name="old-password" class="password ip"  placeholder="Old Password" required>
                        </div>
                        <div class="inform">
                            <input type="password" name="password" class="password ip" placeholder="New Password" required>
                        </div>
                        <div class="inform">
                            <input type="password" name="password1" class="password ip"  placeholder="Retype" required>
                        </div>
                        <button type="submit" name="change" class="submit butn">Change</button>
                       
                </form>

        </div>
        
        

    </body>

</html>