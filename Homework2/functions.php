<?php
//task 1 Задание №1
echo "--------------Task1------------------- <br>";
function task1($string, $true)
{
    if ($true === true) {
        echo implode(" ", $string);
        return $string;
    } else {
        $arr = explode(" ", $string);
        $count = count($arr);
        for ($i = 0; $i <= $count; $i++) {
            echo $arr[$i] . "<p>";
        }
    }

}

task1("В чем проблема - не знаю что с первым условием не так", 1);

//task2 Задание № 2
echo "------------------Task2--------------- <br>";
function task2($array, $string)
{
    /* //работа со строкой ( введеной)//
    $newarray = explode (" ", $array); */
//$elements = count ($array);
//foreach ($newarray as $elem) {
    $resault = 0;
    $resault1 = 1;
    foreach ($array as $elem) {
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
            default:
                return 'Неизвестный арифметический оператор';
                break;
        }
    }
    return $resault;
}

$rar = array(1, 2, 3, 4, 5, 6, 6, 7, 7, 7);
echo task2($rar, "+");

//task3 Задание № 3
echo "<br>------------------Task3--------------- <br>";
function task3(...$numbers)
{
    $kolvo = func_num_args();
    $operator = func_get_arg(0);
    if ($operator == '+') {
        $tusk3 = 0;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 + $operator($i);
        }
    } elseif ($operator == '-') {
        $tusk3 = 0;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 - $operator($i);
        }
    } elseif ($operator == '*') {
        $tusk3 = 1;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 * $operator($i);
        }
    } elseif ($operator == '/') {
        $tusk3 = 1;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 / $operator($i);
        }
    } else echo "Введите первым символом математическую операцию";
    return $tusk3;
}


echo task3("- 1 2 3 4 5 6 ");
