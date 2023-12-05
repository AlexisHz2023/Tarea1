<?php

// Clase base Vehiculo
class Vehiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function obtener_info() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}

// Clase Camioneta que extiende de Vehiculo
class Camioneta extends Vehiculo {
    private $capacidad_carga;

    public function __construct($marca, $modelo, $capacidad_carga) {
        parent::__construct($marca, $modelo);
        $this->capacidad_carga = $capacidad_carga;
    }

    public function obtener_info() {
        // Llama al método obtener_info de la clase base Vehiculo
        $info_vehiculo = parent::obtener_info();
        return "{$info_vehiculo}, Capacidad de Carga: {$this->capacidad_carga} toneladas";
    }
}

// Ejemplo de uso
$camioneta = new Camioneta("Toyota", "Hilux", 2.5);
echo $camioneta->obtener_info();

?>
