<?php

class Vehiculo {
    // Propiedades
    public $marca;
    public $modelo;
    public $año;

    // Constructor
    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    // Método para obtener información del vehículo
    public function obtener_info() {
        echo "Información del vehículo:\n";
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Año: " . $this->año . "\n";
    }
}

// Crear una instancia de la clase Vehiculo
$mi_vehiculo = new Vehiculo("Toyota", "Corolla", 2022);

// Llamar al método obtener_info para mostrar la información del vehículo
$mi_vehiculo->obtener_info();

?>