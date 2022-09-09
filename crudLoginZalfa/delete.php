<?php

$id=$_GET['id'];

$d = new PDO('mysql:host=localhost;dbname=homesick','root',''); 
$query = $d->query("DELETE FROM `usertb` WHERE `id`='$id' ");

if($query){
    header('location:crud.php');}