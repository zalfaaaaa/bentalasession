<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:fosession.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <h1>B E R A N D A</h1>
    <!-- <a href="ussession.php" class="btn btn-secondary mb-3" >User</a>  
    <a href="logsession.php" class="btn btn-info mb-3">Logout</a> -->
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="ussession.php">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crud.php">Kembali</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logsession.php">Logout</a>
      </li>
      
    </ul>
  </div>
</div>
</body>
</html>