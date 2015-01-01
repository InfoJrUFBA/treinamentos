<?php
    include("../../Models/User.php");
    include("../../Models/Product.php");

    session_start();
    if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user']))
    {
        $user = User::find($_SESSION['userId']);
        echo 'Olá, ' . $user->name;

        $products = Product::all();
    }
    else
    {
        header('Location: ../Users/Login.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <?php foreach ($products as $product): ?>
            <tr>
                <td>
                    <?php echo $product->name; ?>
                </td>
                <td>
                    <?php echo $product->price; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php unset($product); ?>
    </table>
</body>
</html>
