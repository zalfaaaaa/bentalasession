<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        form{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <form action="otsession.php" method="POST">
        <h1>L O G I N</h1>
        <div>
            <label>Username</label><br>
            <input type="text" name="username" id="">
        </div>
        <br>
        <div>
            <label>Password</label><br>
            <input type="password" name="password" id="">
        </div>
        <br><input type="submit" value="Login" style="background-color:pink;"><br>
        <marquee behavior="" direction="">
            <h4>Belum punya akun? Kasian, makanya bikin!</h4>
        </marquee>
    </form>
</body>
</html>