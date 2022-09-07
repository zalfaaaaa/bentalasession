<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:fosession.php");
}

?>

<h1>B E R A N D A</h1>
<a href="ussession.php">User</a> | 
<a href="logsession.php">Logout</a>