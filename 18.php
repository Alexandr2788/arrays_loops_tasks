<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 28.02.2018
 * Time: 22:35
 */

//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $item){
    if ($item==6 or $item==7){
        echo "<b>$item</b></br>";
    }else {
        echo $item."<br>";
    }
}