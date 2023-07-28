<?php

// Интерфейсы
// Это структуры, которые описывают то, какие
// константы и методы должен содержать класс,
// который будет реализовывать интерфейс


interface FirstInterface {
    public function getName(); // Так же не могут быть созданы его экземпляры
}

interface SecondInterface {
    public function getStatus();
}

interface ThirdInterface extends FirstInterface, SecondInterface {

}

// Для реализации интерфейса пишем ключивое слово implements
class Test implements FirstInterface, SecondInterface {
    public $name = "Andrew";
    public $status = "Admin";

    public function getName() { // Реализовываем функцию, которая задана в интерфейсе
        echo $this->name;
    }

    public function getStatus() { // Реализовываем функцию, которая задана в интерфейсе
        echo $this->status;
    }
}

$user1 = new Test;
$user1->getStatus();
$user1->getName();

?>