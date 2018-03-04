<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.02.2018
 * Time: 19:51
 */
//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

$result=0;
$a=[1, 20, 15, 17, 24, 35];
foreach ($a as $item){
    $result+=$item;
}
echo $result;
