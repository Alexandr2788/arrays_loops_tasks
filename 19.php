<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 28.02.2018
 * Time: 22:39
 */

//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
// Текущий день должен храниться в переменной $day.

$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach ($arr as $item) {
    $day = date('N');
    if ($item == $day) {
        echo "<b>$item</b><br>";
    } else {
        echo $item . "<br>";
    }
}