<?php
require_once('Car.php');
class UberVan extends Car {
  public $typeCarAccepted;
  public $seatsMaterial;

  public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
    parent::__construct($license, $driver);
    $this-> brand = $typeCarAccepted;
    $this-> model = $seatsMaterial;
  }
}