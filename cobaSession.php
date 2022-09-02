<?php

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

header('location:beranda.php');
// echo $_SESSION['username']."<br/>";
// echo $_SESSION['password'];
