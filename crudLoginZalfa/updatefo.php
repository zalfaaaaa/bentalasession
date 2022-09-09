<?php

$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=homesick",'root','');
$query = $db->query("SELECT * FROM `usertb` WHERE `id`='$id'");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
    <form action="update.php" method="POST" class="container mt-5">
    <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label class="form-label">Username</label>
            <input class="form-control" type="text" name="username" value="<?= $data['username'] ?>">
        </div>
        <br>
        <div>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $data['password']?>">
        </div>
            <label class="form-label">Role</label>
            <select class="form-control" name="role" id="">
                <option value="Admin" <?= $data['id'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="User" <?= $data['id'] == 'User' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-warning" value="simpan">
    </form>
</body>
</html>