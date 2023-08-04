<?php

namespace NewClass\Home;

// Пространства имен

/*
Мы можем избегать конфликтов. Это имеющий имя фрагмент
программы содержащий в себе функции, константы и классы.
*/

class User15 {
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

function __construct($name, $password, $email, $city)
{
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
    $this->city = $city;
}

function getInfo() {
    return "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
}
}

$user1 = new User15("Andrew", "12345", "andrew@gmail.com", "Boston");
echo $user1->getInfo();

?>