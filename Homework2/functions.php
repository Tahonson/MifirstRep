<?php
//task 1 Задание №1
echo "<br>------------------Task1--------------- <br>";
function task1($string, $value)
{
    if ($value === true) {
        $resault = implode('', $string);
        return $resault;
    } else {
        foreach ($string as $str) {
            echo '<p>' . $str . '<p>';
        }
    }

}

//$a = array ( 1,2,3,4,5);
//task1($a, true);

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

//$rar = array(1, 2, 3, 4, 5, 6, 6, 7, 7, 7);
//echo task2($rar, "+");

//task3 Задание № 3
echo "<br>------------------Task3--------------- <br>";

function task3()
{
    $kolvo = func_num_args();
    $operator = func_get_arg(0);
    if ($operator == '+') {
        $tusk3 = 0;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 + func_get_arg($i);
        }
    } elseif ($operator == '-') {
        $tusk3 = 0;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 - func_get_arg($i);
        }
    } elseif ($operator == '*') {
        $tusk3 = 1;
        for ($i = 1; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 * func_get_arg($i);
        }
    } elseif ($operator == '/') {
        $tusk3 = func_get_arg(1);

        for ($i = 2; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 / func_get_arg($i);
        }
    } else echo "Введите первым символом математическую операцию";
    return $tusk3;
}

echo "<br>------------------Task4--------------- <br>";

function task4($p1, $p2)
{
    if (is_integer($p1) and is_integer($p2)) {
        echo "<table border='1px'>";
        for ($i = 1; $i <= $p1; $i++) {

            echo "<tr>";

            for ($j = 1; $j <= $p2; $j++) {

                echo "<td>";

                $a[$i][$j] = $i * $j;

                $m = $i + 1;
                echo $a[$i][$j];
                echo "</td>";

            }

            echo "</tr>";

        }

        echo "</table>";


    } else echo "неверно введены данные";

}

//echo task4(10, "ff");

echo "<br>------------------Task5--------------- <br>";
// не могу разобраться с этим заданием до коца, примерно что-то попытался написать, но не работает...
function firstrs($str)
{
    $str = str_replace(' ', '', mb_strtolower($str)); //находим в строке пробелы, убираем, приводим к нижнему регистру
    $revstr = array_reverse($str);
    $num = (count($str)) / 2;
    $i = 0;
    while ($str[$i] == $revstr[$i]) {
        $i++;
        if ($i == $num) break;
    }
    if ($i == $num) {
        $resault = 'true';
        return $resault;
    } else {
        $resault = 'false';
        return $resault;
    }
}

function task5($str)
{
    $resault = firstrs($str);
    if ($resault == 'true') {
        echo 'Строка является палиндромом';
    } else echo 'Строка не является палиндромом';
}

echo "<br>------------------Task6--------------- <br>";

function task6()
{
    echo date('d.m.Y H:i:s') . "<br>";
    echo strftime('24.02.2016 00:00:00');
}

echo task6();

echo "<br>------------------Task7--------------- <br>";
function task7()
{
    $one = 'Карл у Клары украл Кораллы' . "<br>";
    echo $string = str_replace('К', '', $one) . "
";
    $two = 'Две бутылки лимонада';
    echo $string = str_replace('Две', 'Три', $two);
}

echo task7();

echo "<br>------------------Task8--------------- <br>";
echo "<br>------------------Task9--------------- <br>";
echo "<br>------------------Task10-------------- <br>";

