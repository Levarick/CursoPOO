<?php
require_once('Car.php');
require_once('Account.php');

$car = new Car("AFGF312", new Account("Ernestino", "ASKJ766"));
$car->printDataCar();
