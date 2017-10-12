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

echo "<br>------------------Task4--------------- <br>";

function task4($p1,$p2) {
    if (is_integer($p1) and is_integer($p2))
    {
        echo "<table border='1px'>";
        for ($i=1;$i<=$p1;$i++) {

            echo "<tr>";

            for($j=1;$j<=$p2;$j++) {

                echo "<td>";

                $a[$i][$j]=$i*$j;

                $m=$i+1;
                echo $a[$i][$j];
                echo "</td>";

            }

            echo "</tr>";

        }

        echo "</table>";


    } else echo "неверно введены данные";

}
echo task4(10,"ff");

echo "<br>------------------Task5--------------- <br>";
function isPalindrome($w){
    for($i = 0, $l = strlen($w)-1, $il = ceil($l/2); $i < $il; ++$i) {
        if($w[$i] != $w[$l-$i]) return false;
        return true;
    }
}
echo "<br>------------------Task6--------------- <br>";

function task6() {
    echo date('d.m.Y H:i') ."
";
    echo strftime '24.02.2016 00:00:00';
}
echo task6();

echo "<br>------------------Task7--------------- <br>";
function task7() {
    $one ='Карл у Клары украл Кораллы';
    echo $string= str_replace('К', '',$one) ."
";
    $two ='Две бутылки лимонада';
    echo $string = str_replace ('Две', 'Три', $two);
}
echo task7();
echo "<br>------------------Task8--------------- <br>";
