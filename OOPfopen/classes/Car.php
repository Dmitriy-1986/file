<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public static $countCar = 1;

    public function __construct()
    {
        self::$countCar++;
    }

    public function getCarInfo()
    {
        return "<div style='display: inline-block; padding: 10px; margin: 10px; border: 1px solid black;'>
                    <h3 style='margin-top: 0px;'>О моем авто:</h3>
                    Марка: {$this->brand}<br>
                    Цвет:  {$this->color}<br>
                    Количество колес: {$this->wheels}<br>
                    Скорость: {$this->speed}<br>
                </div>
        ";
    }
}