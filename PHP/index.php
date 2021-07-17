<?php
require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');

$uberX = new UberX("GHJG32E", new Account("Andres Salgado", "732678G"), "Chevrolet", "Spark");
$uberX->printDataCar();
?>