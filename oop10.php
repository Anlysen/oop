<?php

// Трейты


// Это механизм обеспечения повторного использования кода

class Base {
    public function sayHello() {
        echo "Hello";
    }
}

trait Hello {
    public function sayHello() {
        echo "Hello";
    }
}

trait World {
    public function sayWorld() {
        echo "World";
    }
}

class myHelloWorld {
    use Hello, World;
}

$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();



?>