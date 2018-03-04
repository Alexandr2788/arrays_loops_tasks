<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 28.02.2018
 * Time: 22:41
 */

/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

x
xx
xxx
xxxx
xxxxx
*/

$i=1;
while($i<=20){
    $k=1;
    while($i>=$k){
        echo "x";
        $k++;
    }
    echo "<br>";
    $i++;
}