<?php
class Product
{
    public $id;
    public $name;
    public $price;

    public function __construct($attributes = array())
    {
        if (!empty($attributes))
        {
            $this->name = $attributes['name'];
            $this->price = $attributes['price'];
        }
    }

    public static function insert($attributes = array())
    {
        $pdo = new PDO('mysql:host=localhost;dbname=porcaria_ltda;', 'root', '');

        $result = $pdo->prepare('INSERT INTO products(name, price) VALUES (:name, :price)');
        $result->execute($attributes);

        return $result;
    }

    public static function all()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=porcaria_ltda;', 'root', '');

        $result = $pdo->prepare('SELECT * FROM products');
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, get_called_class());

        return $result->fetchAll();
    }
}
