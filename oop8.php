<?php

// Константы класса

class User {
    const SOME_CONST = 314;
}

echo User::SOME_CONST;
// Значение константы менять нельзя





// Абстрактные классы

/*
Это класс, для которго не могут быть созданы его
экземпляры.
*/

abstract class People {
    public $name;
    public $status;

    abstract public function getStatus();
// Абстрактный или вертуальный класс
// Его метод должен быть реализован в дочернем классе
}

class Admin extends People {
    public function getStatus() {
        echo "Admin";
    }
}

$user1 = new Admin;
$user1->getStatus(); // Обращение к getStatus(), где записан Admin




?>