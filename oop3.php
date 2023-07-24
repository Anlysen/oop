<?php 

// Метод

class User2 {
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

    // public function Hello() { // Метод
    //     echo "Hello {$this->name}";
    // }

    // Вывод информации о пользователе
    function getInfo() {
        return "{$this->name}" . "{$this->surname}";
    }
}
$admin = new User2();
$admin->name = 'Alex ';
$admin->surname = 'Luise';
echo "The user : {$admin->getInfo()}";




?>