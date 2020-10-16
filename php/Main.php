<?php
echo "Hello World<hr>";


$car = new Car('MZXS321', new Account('Martin', '123SXYM'));
$car->passenger = 3;
$car->printCar();


$car2 = new UberX('MTZSG12', new Account('Martin2', '21GSYTM'), "Chevrolet", "Spark");
$car2->passenger = 3;
$car2->printCar();
