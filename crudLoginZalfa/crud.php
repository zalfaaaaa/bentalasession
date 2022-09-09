<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container mt-5">
    <?php
        $h = new PDO('mysql:host=localhost;dbname=homesick','root','');
        $query = $h->query('SELECT * FROM usertb');
    ?>
        <h1>Hi!</h1><br>

        <a href="berandasz.php" class="btn btn-success mb-3">Beranda</a>
        <a href="createfo.php" class="btn btn-dark mb-3">Add User</a>
        
        <ul class="list-group">
        
    <?php
        while($data=$query->fetch()):?>
        <li class="list-group-item d-flex justify-content-between">
        
        <a href="updatefo.php?id=<?=$data['id'];?>"><?= $data['username'];?></a>

        <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-sm btn-danger ml-auto">Delete</a>
    </li>
    <?php endwhile ?>
</ul>
</div>
</body>
</html>