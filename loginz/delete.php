<?php

$id=$_GET['id'];

$d = new PDO('mysql:host=localhost;dbname=homesick','root',''); 
$query = $d->query("delete from `usertb` where `id`='$id' ");

if($query){
    header('location:crud.php');}