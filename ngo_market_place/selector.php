<?php
    if (isset($_POST['volunteer']) && $_POST['volunteer'] == 'volunteer') {
        include('volunteer.php');
    } elseif (isset($_POST['ngo']) && $_POST['ngo'] == 'ngo') {
         include('form.php');
    } else {
         include('error-state.php');
    }
 ?>





<div class="but"><a href=""><input  type="button" class="button" name="Login" value="SUBMIT"></a></div>