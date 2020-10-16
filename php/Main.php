<?php
echo "Hello World<hr>";


$car = new Car('MZXS321', new Account('Martin', '123SXYM'));
$car->passenger = 3;
$car->printCar();


$car2 = new Car('MTZSG12', new Account('Martin2', '21GSYTM'));
$car2->passenger = 3;
$car2->printCar();
