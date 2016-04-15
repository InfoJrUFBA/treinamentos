<?php
    include("../../Models/User.php");

    if(!empty($_POST))
    {
        $user = User::login($_POST['user']);

        if(!empty($user))
        {
            session_start();
            $_SESSION['userId'] = $user->id;
            header("Location: ../Products/Index.php");
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="user[email]" placeholder="Email">
        <input type="password" name="user[password]" placeholder="Password">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
