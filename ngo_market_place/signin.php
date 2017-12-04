<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Choosing</title>
	<link rel="stylesheet" type="text/css" href="chose.css">
</head>
<?php
        include 'includes/header.php';
        ?>
<body>
<div class="box">
	
		<div class="forms">
                    <?php
$value_to_page = array(
    "vol" => 'volsign.php',
    "ng"  => 'ngosign.php',
);
if(isset($_POST['submit'])){

    // process other fields like $_POST['some-other']
    if(isset($_POST['options']) && isset($value_to_page[$_POST['options']])){
        header('Location: '.$value_to_page[$_POST['options']]);
        return;
    }
} ?>

                    <form method="POST">
			<div class="loginLabel"><h1>Please Choose</h1></div>
			<div class="text"><input  type="radio" class="volunteer" name="options" value="vol" id="vol" ><span><b>Volunteer</b></span></div>
			<div class="text"><input  type="radio" class="ngo" name="options" value="ng" id="ng"><span><b>NGO</span></b></div>
                        <button type="submit" name="submit" class="button">Submit</button>
                    </form>
                </div>
</div>

</body>

</html>