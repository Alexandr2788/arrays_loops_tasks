<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 03.03.2018
 * Time: 13:42
 */
//23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например:
// есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
//По желанию можете сделать проверку на корректность введения данных пользователем.


$number = 1234;
$number=(str_split($number));
$result=0;
foreach ($number as $value) {
    $result += $value;
}
echo $result;