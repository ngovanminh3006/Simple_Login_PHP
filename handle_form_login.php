<?php
    session_start();
    include 'database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE Email = '$username'  AND Password = '$password' ";

    $result = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($count == 0) {
        header('location: index.php');
    }else{
        $_SESSION['login_user'] = $row['Name'];
        header('location: main.php');
    }
    // var_dump($result);
    // die();
// echo($username);
// echo($password);
// echo("xinloiban");
?>