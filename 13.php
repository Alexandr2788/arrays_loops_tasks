<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 13.02.2018
 * Time: 21:38
 */

//13. Вывести таблицу умножения

$cols=10;
$rows=10;
echo "<table border='1' align='center'>";
for ($tr=1;$tr<=$rows;$tr++){
    echo "<tr>";
    for ($td=1;$td<=$cols;$td++){
        if ($tr==1 or $td==1)
            echo "<th style='background: blue'>".$tr*$td."</th>";
        else
            echo "<td>".$tr*$td."</td>";
    }
    echo "</tr>";
}
echo "</table>";