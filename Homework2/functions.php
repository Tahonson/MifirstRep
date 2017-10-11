<?php
//task 1 Задание №1

function task1($string, $true)
{
    if ($true === true) {
        echo implode(" ", $string);
        return $string;
    } else {
        $arr = explode(" ", $string);
        $count = count($arr);
        for ($i=0;$i<=$count;$i++) {
            echo $arr[$i] ."<p>";
        }
    }

}
task1("В чем проблема - не знаю что с первым условием не так", 1);

//task2 Задание № 2

function tast2($array, $string) {
    /* //работа со строкой ( введеной)//
    $newarray = explode (" ", $array); */
//$elements = count ($array);
//foreach ($newarray as $elem) {
    $resault =0;
    foreach ($array as $elem ) {
        switch ($string) {
            case '+':
                $resault = $resault + $elem;
                break;
            case '-':
                $resault = $resault - $elem;
                break;
            case '*':
                $resault1 = $resault1 * $elem;
                $resault = $resault1;
                break;
            case '/':
                $resault1 = $resault1 / $elem;
                $resault = $resault1;
                break;
        }
    }
    return $resault;
    echo $resault;
}
$rar = array(1,2,3,4,5);
echo tast2( $rar,"+");

//task3 Задание № 3

function tast3() {

}
