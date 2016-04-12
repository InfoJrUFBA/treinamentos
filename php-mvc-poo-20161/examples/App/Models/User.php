<?php
class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($attributes = array())
    {
        if (!empty($attributes))
        {
            $this->name = array_key_exists('name', $attributes) ? $attributes['name'] : null;
            $this->email = $attributes['email'];
            $this->password = $attributes['password'];
        }
    }

    public static function login($attributes = array())
    {
        $pdo = new PDO('mysql:host=localhost;dbname=porcaria_ltda;', 'root', '');

        $result = $pdo->prepare('SELECT * FROM users WHERE email = :email and password = :password');
        $result->execute($attributes);
        $result->setFetchMode(PDO::FETCH_CLASS, get_called_class());

        return $result->fetch();
    }

    public static function find($userId)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=porcaria_ltda;', 'root', '');

        $result = $pdo->prepare('SELECT * FROM users WHERE id = :id');
        $result->bindValue(":id", $userId);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, get_called_class());

        return $result->fetch();
    }
}
