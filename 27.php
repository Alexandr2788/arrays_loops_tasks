<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 04.03.2018
 * Time: 11:38
 */

//27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
// Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета,
// выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.

$rows=rand(2,15);
$cols=rand(2,15);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table border="1">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $number=rand();
        $i=$colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:$i'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';