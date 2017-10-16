<?php
//Задание №1
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

//Задание №2
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

//Задание №3
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
        $tusk3 = func_get_arg(1);
        for ($i = 2; $i <= $kolvo; $i++) {
            $tusk3 = $tusk3 * func_get_arg($i);
        }
    } elseif ($operator == '/') {
        $tusk3 = func_get_arg(1);
        for ($i = 2; $i < $kolvo; $i++) {
            $tusk3 = $tusk3 / func_get_arg($i);
        }
    } else echo "Введите первым символом математическую операцию";
    return $tusk3;
}
//Задание №4
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

// Задание №5

//Задание №5

function task6()
{
    echo date('d.m.Y H:i:s') . "<br>";
    echo strftime('24.02.2016 00:00:00');
}

function task7()
{
    $one = 'Карл у Клары украл Кораллы' . "<br>";
    echo $string = str_replace('К', '', $one) . "
";
    $two = 'Две бутылки лимонада';
    echo $string = str_replace('Две', 'Три', $two);
}

//Task №8
function task8($string)
{
    $b = '|packets:([0-9]+)|';
    $c = '|[:][)]|';
    preg_match_all($b, $string, $output);
    foreach ($output as $entry) {
        if ($entry > 1000) {
            echo 'Сеть есть!';
            break;
        } else echo 'Сети нет!';
    }
}

//ДОРАБОТКА
//принимать имя файла, открыть файл, вывести содержимое на экран;
//создать файл anothertext.txt , добавить в него "Hello again!"
function task9($text) {
    if (file_exists($text)) {
        $file = file_get_contents($text);
        return $file;
    } else return 'Такой файл не существует!';
}
function task10($text) {
    $a = 'Hello again!';
    $rewrite = fopen($text , 'w+');
    fwrite($rewrite , $a );
    fclose($rewrite);
}