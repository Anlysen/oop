<?php

// Магические методы
// clone - отвечает за клонирование обьектов в php
// Эта функция должна быть определена в соответствующем классе

class User {
    private $name;
    private $city;
    private $id;

    function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }
    function setId($id) {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0; // В этом клонировании мы делаем идентификатор равным 0
    }
}

$user1 = new User('Andrew', 'Sitka');
$user1->setId(5662);
$user2 = clone $user1;
var_dump($user2);

echo "<br>";
echo "<br>";



// __get, __set
// Используется для использования закрытых переменных 

class GetSet {
    private $number = 1;

    public function __get($name)
    {
        echo "You got {$name}";
    }
    public function __set($name, $value)
    {
        echo "You set {$name}";
    }
}

$obj = new GetSet();
echo $obj->number;
echo $obj->number = 689;


?>