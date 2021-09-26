<?php
error_reporting (-1);

require_once "classes/Car.php";
require_once "classes/File.php";
require_once "classes/Product.php";

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/* 
$car1 = new Car();
$car1 -> brand = 'BMW';
$car1 -> color = 'Черный';
$car1 -> wheels = 4;
$car1 -> speed = 200;

$car2 = new Car();
$car2 -> brand = 'Volvo';
$car2 -> color = 'Белый';
$car2 -> wheels = 4;
$car2 -> speed = 180;

$car3 = new Car();
$car3 -> brand = 'Volkswagen';
$car3 -> color = 'Красный';
$car3 -> wheels = 4;
$car3 -> speed = 190;

$car4 = new Car();
$car4 -> brand = 'Таврия';
$car4 -> color = 'Белый';
$car4 -> wheels = 4;
$car4 -> speed = 120; */

/* 
* File
*/
echo "<br>";
$file = new File( __DIR__ . '/file.txt' );
$file -> write('Строка #1');
echo "<br>";

$car1 = new Car('Белый', 4, 180, 'Volvo');
echo $car1 -> getCarInfo();
echo Car::getCount();

$car2 = new Car('Красный', 4, 190, 'Volkswagen');
echo $car2 -> getCarInfo();
echo Car::getCount();

$car3 = new Car('Белый', 4, 120, 'Таврия');
echo $car3 -> getCarInfo();
echo Car::getCount();

$car4 = new Car('Черный', 4, 200, 'BMW');
echo $car4 -> getCarInfo();
echo Car::getCount();

echo "<hr>";

$book = new Product('Три мушкетера', 20, null, 1000);
$notebook = new Product('Dell', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book -> getProduct('book');
echo $notebook -> getProduct('notebook');

