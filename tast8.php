<?php
$str = "строка текста <br>";
echo $str;
$massive = explode (" ", $str);
//var_dump ($massive) .PHP_EOL;
$index =0;
$elements = count  ($massive);
while ($index < $elements) {
    echo $massive ."|" ."<br>";
    $index++;
}