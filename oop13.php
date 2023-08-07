<?php

echo "<h1>Обработка ошибок</h1>";

//require_once 'file.txt';

$file = 'namespace.php';

// Для того чтобы словить брошеное исключение
/*
Исключение может быть брошено в блоке try. Если
в некоторой строке блока try было брошено исключение,
то все инструкции после throw будут проигнорированы и
если исключение будет поймано, то начнут выполнение все
инструкцииблока catch. Если брошенное исключение не совпадает
с брошеным классом, то будет возникать ошибка.
*/
//try {
//    if (!file_exists($file)) { // Если файл не существует
//        throw new Exception('File not found'); // Кидаем исключение
//    }
//} catch (Exception $e) {
//}




echo "<h3>Обработка исключений с помощью блока finally</h3>";

function inverse($x) {
    if (!$x) {
        throw new Exception('Деление на ноль.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "<br>";
} catch (Exception $e) {
    echo 'Поймано исключение : ', $e->setMassege(), "<br>";
} finally {
    echo "Первый блок finally <br>";
}

try {
    echo inverse(0) . "<br>";
} catch (Exception $e) {
    echo 'Поймано исключение : ', $e->getMessage(), "<br>";
} finally {
    echo "Второй блок finally <br>";
}

echo "Hello world!" . "<br>";
echo "<hr>";
/*
Результат :
0.2
Первый блок finally
Поймано исключение : Деление на ноль.
Второй блок finally
Hello world!
*/




echo "<h3>Взаимодействие между блоками finally и return</h3>";

function test() {
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return 'finally';
    }
}
echo test();
echo "<hr>";




echo "<h3>Вложенные исключения</h3>";

class MyException extends Exception {}

class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo');
            } catch (MyException $e) {
                // Повторый выброс исключения
                throw $e;
            }
        } catch (Exception $e) {
            var_dump($e->setMassege());
        }
    }
}

$foo = new Test;
$foo->testing();

?>