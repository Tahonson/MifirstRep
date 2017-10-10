<?php
//task 1

function task1($string, $true)
{
    if ($true == true) {
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
task1("фвцзвфц вцфзщ фц вфц вфцвфцвфц вфц", 12);
