<?php

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role']; 
$id=$_POST['id'];

$update = new PDO('mysql:host=localhost;dbname=homesick','root','');
$query = $update->query("update `usertb` set `username`='$username', `password`='$password', `role`='$role' where `id`='$id'");

if($query){
    header('location:crud.php');
}