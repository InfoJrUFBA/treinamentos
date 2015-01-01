<?php
    include('../../Models/Product.php');

    if(!empty($_POST))
    {
        $product = Product::insert($_POST['product']);

        if($product)
        {
            header('Location: Index.php');
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
        <input type="text" name="product[name]" placeholder="Name">
        <input type="text" name="product[price]" placeholder="Price">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
