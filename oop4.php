<?php

// Конструктор

/*
Конструктор вызывает метод при каждом 
создании нового объекта. Используется для того,
чтобы настроить все значения необходимых в наших 
свойствах. Позволяет избавится от дублирований строчек 
кода.
*/


// class User3 {
//     public $name;
//     public $password;
//     public $email ;
//     public $city;

//     function __construct($name, $password, $email, $city)
//     {
//         $this->name = $name;
//         $this->password = $password;
//         $this->email = $email;
//         $this->city = $city;
//     }
//     function getInfo() {
//         return "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
//     }
    
// }

// $user1 = new User("Andrew", "12345", "andrew@gmail.com", "Boston");
// echo $user1->getInfo();





// Деструктор 

class DestructableClass {
    function __construct()
    {
        print "Construct ";
        $this->name = "DestructableClass";
    }

    function __destruct()
    {
        print "Destruct " . $this->name; // Происходит уничтожение обьекта скрипта
    }
}

$obj = new DestructableClass();



?>