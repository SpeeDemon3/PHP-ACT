<?php

/**
 * Crea en PHP la clase vehículo, con las siguientes propiedades: marca, modelo y potencia.
 * Se deben crear los métodos necesarios para crear vehículos, consultar y modificar sus
 * propiedades, e imprimir por pantalla la información de un vehículo (todos sus datos).
 */

class Vehicle {
    private $brand;
    private $model;
    private $power;

    function __construct($brand, $model, $power) {
        $this->brand = $brand;
        $this->model = $model;
        $this->power = $power;
    }

    public function setBrand($newBrand) {
        $this->brand = $newBrand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setModel($newModel) {
        $this->model = $newModel;
    }

    function getModel() {
        return $this->model;
    }

    function setPower($newPower) {
        $this->power = $newPower;
    }

    function getPower() {
        return $this->power;
    }

    function __toString()
    {
        return "[ Brand: $this->brand - Model: $this->model - Power: $this->power ] "; 
    }

}

?>