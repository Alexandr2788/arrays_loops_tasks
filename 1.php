<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 11.02.2018
 * Time: 19:56
 */

//1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$a=["html", "css", "php", "js", "jq"];
foreach ($a as $v){
    echo "$v<br>";
}

