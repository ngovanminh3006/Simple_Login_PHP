<?php
    session_start();
    if(!isset($_SESSION['login_user'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Happy <?php echo $_SESSION['login_user'] ?> </h1>
    <a href="logout.php">logout</a>
</body>
</html>