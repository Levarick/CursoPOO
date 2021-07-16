<?php
class Car {
  public $id;
  public $license;
  public $driver;

  public function __construct($license, $driver){
    $this->license = $license;
    $this->driver = $driver;
  }
  public function printDataCar(){
    echo "license: $this.license";
    echo "driver: $this.driver.name";
  }
}