<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 04.03.2018
 * Time: 12:11
 */
//28. Вывести таблицу умножения с помощью двух циклов for.

$cols=10;
$rows=10;
echo "<table border='1' align='center'>";
for ($tr=1;$tr<=$rows;$tr++){
    echo "<tr>";
    for ($td=1;$td<=$cols;$td++){
            echo "<td>".$tr*$td."</td>";
    }
    echo "</tr>";
}
echo "</table>";