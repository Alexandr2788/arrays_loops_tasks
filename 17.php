<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 28.02.2018
 * Time: 22:31
 */

//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$arr=array(1,2,3,4,5,6,7,8,9,10,11,12);
foreach($arr as $ar){
    $month=date("w");
    if ($ar==$month){
        echo "<b>$ar</b></br>";
    }else{
        echo($ar)."<br>";}
}