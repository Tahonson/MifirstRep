<?php
$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015,
);
$toyota = array(
    "model" => "camry",
    "speed" => 110,
    "doors" => 4,
    "year" => 2014,
);
$opel  = array(
    "model" => "astra",
    "speed"=> 100,
    "doors"=> 3,
    "year"=> 2013,
);
$car = array(
    $bmw,
    $toyota,
    $opel,
);
foreach ($car as $key => $brand ) {
    print_r ($brand);
}
foreach ($car as $key => $brand ) {
    echo "{$brand["model"]} {$brand["speed"]} {$brand["doors"]} {$brand["year"]}<br>";
    echo $brand["model"];

}