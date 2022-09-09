<?php

session_start();

$username=$_POST['username']; 
$password=$_POST['password'];

$z = new PDO('mysql:host=localhost;dbname=homesick','root','');
$query = $z->query("SELECT * FROM usertb WHERE username='$username' AND password='$password'");

if($query->rowCount()>0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header("location:crud.php");
} else{
    header("location:fosession.php");
}