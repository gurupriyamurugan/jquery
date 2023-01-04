<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
   header('Location: login.php');
}

?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>

