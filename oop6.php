<?php

// Наследование

class User {
    public $name;
    public $password;
    public $email ;
    public $city;

    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }
    
    function getInfo() {
        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
        // В это строке мы добавляем информацию в переменную, для удобства
        return $information;
    }
}

$user1 = new User("Andrew", "12345", "andrew@gmail.com", "Boston");
echo $user1->getInfo();

class Moderator extends User {
    public $info;
    public $rights;

    function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        // parent:: - для использования конструктора в дочернем классе
        $this->info = $info;
        $this->rights = $rights;
    }
    // Вывод с новыми значениями
    function getInfo() {
        $information = parent::getInfo(); // Приравниваем значение, получаем из главного класса данную функцию
        $information = "{$this->info}" . "{$this->rights}"; // Прибавляем значения
        // В это строке мы добавляем информацию в переменную, для удобства
        return $information;
    }
}

$moder = new Moderator("Andrew", "654321", "sara@gmail.com", "Anchorage", "Moderator", "True");
// Внутрь записываем значения из конструктора
echo $moder->getInfo(); // Вывод функции





// Наследование protected

class Test {
    protected $info;
}

class Test2 extends Test {
    public function test() {
        $this->info = "Info";
        echo $this->info;
    }
}

$test2 = new Test2();
$test2->test();
// $test2->info = "Information"; // Мы можем использовать данный метод, но не можем изменять

/*
PHP предоставляет ключевое слово final, разместив которое
перед объявлениями методов или констант класса, можно предотвратить
их переопределение в дочерних классах. Если же сам класс определяется
с этим ключевым словом, то он не сможет быть унаследован.
*/

?>