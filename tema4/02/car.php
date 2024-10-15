<?php
/**
 * Crea en PHP la clase vehículo, con las siguientes propiedades: marca, modelo y potencia.
 * Se deben crear los métodos necesarios para crear vehículos, consultar y modificar sus
 * propiedades, e imprimir por pantalla la información de un vehículo (todos sus datos)
 */

 class Car {
    private $doors;
    private $engine;
    private $color;
    private $brand;
    private $model;
    private $fuel;

    function __construct($numDoors, $engine, $color, $brand, $model, $fuel)
    {
        $this->doors = $numDoors;
        $this->engine = $engine;
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
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

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function getFuel() {
        return $this->fuel;
    }

    function __toString()
    {
        return "Brand[" . $this->brand . "] - Model[" . $this->model . "] - Fuel[" . $this->fuel . "] - Doors[" 
        . $this->doors . "] - Engine [" . $this->engine . "] - Color[" . $this->color . "]";
    }

 }

?>