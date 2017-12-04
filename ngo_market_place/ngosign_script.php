<?php
require 'includes/common.php';
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

        $query = "SELECT * FROM ngo WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        $num = mysqli_num_rows($result);
        
        if ($num == 1)
            {
            session_start();
            $_SESSION['email']=$email;
            header("location:ngohomepage.php?email=$email");
        }
        else
        {
            echo 'Invalid data';
        }
?>





