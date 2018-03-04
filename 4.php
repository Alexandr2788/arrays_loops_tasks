<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.02.2018
 * Time: 20:16
 */
//4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$arr=['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key=>$item){
    echo "$key $item<br>";
}