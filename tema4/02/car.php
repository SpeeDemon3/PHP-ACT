<?php
/**
 * Crea en PHP la clase coche que herede las propiedades y métodos de la clase vehículo del
 * ejercicio anterior. Además, la clase coche tendrá las propiedades puertas y ruedas. Esta
 * última tendrá el valor 4, y todos los coches que se creen compartirán el mismo valor. Se
 * deben crear los métodos necesarios para crear coches, consultar y modificar susç
 * propiedades, e imprimir por pantalla la información de un coche (todos sus datos)
 */

 require_once("vehicle.php");

 class Car extends Vehicle {
    private $doors;
    private $engine;
    private $color;
    private $fuel;
    private static $wheels = 4;

    function __construct($brand, $model, $power, $numDoors, $engine, $color, $fuel)
    {
        parent::__construct($brand, $model, $power);
        $this->doors = $numDoors;
        $this->engine = $engine;
        $this->color = $color;
        $this->fuel = $fuel;
    }

    public function setDoors($numDoors)
    {
        $this->doors = $numDoors;
    }

    public function getDoors() 
    { 
        return $this->doors;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public static function setWheels($numWheels) {
        self::$wheels = $numWheels;
    }

    public static function getWheels() {
        return self::$wheels;
    }

    function __toString()
    {
        return "Brand[" . $this->getBrand() . "] - Model[" . $this->getModel() . "] - Fuel[" . $this->fuel . "] - Doors[" 
        . $this->doors . "] - Engine[" . $this->engine . "] - Color[" . $this->color . "] - Wheels[" . Car::$wheels . "] - Power["
        . $this->getPower() . "]";
    }

 }

?>