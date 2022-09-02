<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:formSession.php');
}

?>

<h1>Halaman Beranda</h1>
 
<button><a href="userSession.php">Halaman User</a></button> | 
<button><a href="deleteSession.php">Logout</a></button>
