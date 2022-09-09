<?php

session_start();

if(isset($_SESSION['username'])){
    echo "<h1>WELCOME HOMESICK LOVERS!<h1/>";
    echo $_SESSION['username'];
}