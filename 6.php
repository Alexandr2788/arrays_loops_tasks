<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.02.2018
 * Time: 20:29
 */
// Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
// $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');

$arr=['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key=>$item) {
    $en[]=$key;
    $ru[]=$item;
}
var_dump($en);
var_dump($ru);