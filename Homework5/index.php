<?php
// функция коробки передач
function transmission($settings) {
    switch ($settings){
        case 'ON' : // включение трансмиссии
            if($this->direction == 1) {

            }

    }

}
class Car {
 //   use -------;
    private $power;
    private $speed;
    private $distance;
    private $direction;
    private $transmission;
    //функция движения
    public function move($distance,$speed,$direction) {

    }
    //
    public function engine($settings,$distance,$speed) {

    }
    // $temperature - функция рег. температуры
    public function refrigeration($temperature,$path) {

    }

}
$bmw = new car();
$bmw->distance=30;

