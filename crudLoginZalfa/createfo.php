<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="create.php" method="POST" class="container mt-5">
        <h1>ADD USER</h1>
        <div class="mb-3">
            <label class="form-label">Username : </label>
            <input type="text" class="form-control" name="username">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Password : </label>
            <input type="password" class="form-control" name="password">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Role : </label>
            <select name="role" class="form-control" id="">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success btn-block" value="simpan">
    </form>
</body>
</html>