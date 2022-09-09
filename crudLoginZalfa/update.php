<?php

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role']; 
$id=$_POST['id'];

$update = new PDO('mysql:host=localhost;dbname=homesick','root','');
$query = $update->query("UPDATE `usertb` SET `username`='$username', `password`='$password', `role`='$role' WHERE `id`='$id'");

if($query){
    header('location:crud.php');
}