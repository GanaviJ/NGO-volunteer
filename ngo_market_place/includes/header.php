
<?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <div class="head1">
    <a href="settings.php"><input type="submit" class="Login" name="settings" value="Settings"></a>
    <a href="delete_script.php"><input type="submit" class="Login" name="delete" value="Delete"></a>
    <a href="logout.php"><input type="submit" class="Login" name="logout" value="Logout"></a>
    
</div>
                    ?>
                    <?php
                } else {
                    ?>
                    <div class="head1">
    <a href="homepage.php"><input type="submit" class="Home" name="home" value="Home"></a>
    <a href="signin.php"><input type="submit" class="Login" name="login" value="Login"></a>
    <a href="chose.php"><input type="submit" class="Signup" name="signup" value="Signup"></a>
</div>
                        <?php
                    }
?>