<?php

// Области видимости

class Shop {
    private $name; // Свойство

    public function Name() { // Метод
        $this->name = 'Adidas';
        echo $this->name;
    }
}

$product = new Shop; // Экземпляр класса
$product->Name();

// public - можно использовать везде
// private - закрыт для внешнего кода
// protected - используется только внутри класса





class User1 {
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";
}
// Обращение к свойствам
$admin = new User1();
echo $admin->name . "<br>";
$user1 = new User1();

echo $admin->name = "Alex" . "<br>"; // Перезаписывает данные
echo $user1->name = "Andrew" . "<br>"; // Перезаписывает данные

// Добавляем динамические свойства обьекту
//$user1->surname = "Luise";
//echo $user1->surname;



?>