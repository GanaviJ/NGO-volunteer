<?php
require 'includes/common.php';
$emails = $_SESSION['email'];

$old_pass = $_POST['old-password'];
$new_pass1 = $_POST['password'];
$new_pass2 = $_POST['password'];

$nquery = "select email,password from ngo where email = '$emails'";
$nresult = mysqli_query($con, $nquery);

if(mysqli_num_rows($nresult)!=0)
{
    //echo 'rows selected';
    $nrow = mysqli_fetch_array($nresult);
    $noriginal = $nrow['password'];
    if ($new_pass1 != $new_pass2) {
    header('location: settings.php?error=The two passwords don\'t match');
    } else {
    if ($old_pass == $noriginal) {
        $ngoquery = "UPDATE  ngo SET password ='$new_pass1' WHERE email ='$emails'";
        mysqli_query($con, $ngoquery) or die($mysqli_error($con));
        header('location: ngohomepage.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
}
else
{
    $vquery = "select email,password from users where email = '$emails'";
    $vresult = mysqli_query($con, $vquery);
    
    if(mysqli_num_rows($vresult)!=0)
{
    //echo 'rows selected';
    $vrow = mysqli_fetch_array($vresult);
    $voriginal = $vrow['password'];
    if ($new_pass1 != $new_pass2) {
    header('location: settings.php?error=The two passwords don\'t match');
    } else {
    if ($old_pass == $voriginal) {
        $volquery = "UPDATE  users SET password ='$new_pass1' WHERE email ='$emails'";
        mysqli_query($con, $volquery) or die($mysqli_error($con));
        header('location: volunteerhomepage.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
}
else {
    header('location: homepage.php');
}

    //echo 'no rows selected';
   
}
//$current_pass = $row['password'];
//echo $current_pass;
?>