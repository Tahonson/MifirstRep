<?php
//task 1

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

//task2

function tast2($array, $string) {
  //  $newarray = implode ("$string", $array);
    $elements = count ($array);
    for ($i=0;$i<=$elements;$i++) {

    }


}
