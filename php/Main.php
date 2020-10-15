<?php
echo "Hello World<hr>";

$car = new Car();
$car->license = 'MZXS321';
$car->driver = 'Martin';
$car->passenger = 3;
var_dump($car);

$car2 = new Car();
$car2->license = 'MTZSG12';
$car2->driver = 'Martin2';
$car2->passenger = 3;
var_dump($car2);
