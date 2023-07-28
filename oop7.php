<?php

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


?>