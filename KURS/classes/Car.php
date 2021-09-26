<?php
class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public static $countCar = 0;

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this -> color = $color;
        $this -> wheels = $wheels;
        $this -> speed = $speed;
        $this -> brand = $brand;
        self::$countCar++;
    }

    public static function getCount()
    {
        return self::$countCar;
    }

    public function getCarInfo() {
        return "
        <div style='display: inline-block; border: 1px solid black; padding: 10px; margin: 10px;'>
            <h3 style='margin-top: 0;'>О моем авто:</h3>
            Марка: {$this->brand};<br>
            Цвет: {$this->color};<br>
            Колеса: {$this->wheels};<br>
            Скорость: {$this->speed}.<br>
        </div>
        ";
    }
}


//Урок 7.  Наследование. Часть 1 