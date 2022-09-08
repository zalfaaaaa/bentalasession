<?php

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$add = new PDO('mysql:host=localhost;dbname=homesick','root','');
$query = $add->query("insert into `usertb` values('','$username','$password','$role');");

 if($query){
    header('location:crud.php');
 }