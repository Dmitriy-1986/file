<?php
require_once 'classes/File.php';
require_once 'classes/Car.php';

$file = new File( __DIR__ . '/file.txt');
$file->write('Строка №1');
$file->write('Строка №2');
$file->write('Строка №3');
$file->write('Строка №4');
$file->write('Строка №5');

echo Car::$countCar;

$car = new Car();
$car -> color = 'Black';
$car -> wheels = 4;
$car -> speed = 180;
$car -> brand = 'Volvo';
echo $car -> getCarInfo();

echo Car::$countCar;

$car2 = new Car();
$car2 -> color = 'Black';
$car2 -> wheels = 4;
$car2 -> speed = 200;
$car2 -> brand = 'BMW';
echo $car2 -> getCarInfo();

echo Car::$countCar;

$car3 = new Car();
$car3 -> color = 'Red';
$car3 -> wheels = 4;
$car3 -> speed = 180;
$car3 -> brand = 'Renault';
echo $car3 -> getCarInfo();

//Урок 7.  Наследование. Часть 1 
