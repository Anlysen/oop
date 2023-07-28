<?php

// $this

/*
Это специальная переменная, которая используется
для доступа обьекта класса, изнутри самого класса,
она содержит ссылку на обьект класса.
*/





class User4 {
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

    public function getName() {
        echo $this->name;
        $this->test();
    }
    public function test() {
        echo 'Test';
    }
}

$user1 = new User4();
$user1->name = "Andrew"; // Обращение к свойству $name
$user1->getName(); // Задаём получение метода getName(), вызывая следующую функцию test()





// self

/*
Используется для обращения к внутреннему
содержимому класса.
*/

class Func {
    private static $name0;

    public static function setName($name1) {
        self::$name0 = $name1;
    }
    public static function getName() {
        return self::$name0;
    } 
}
Func::setName('Mike');
echo Func::getName();



?>