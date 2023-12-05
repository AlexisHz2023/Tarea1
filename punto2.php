<?php

class Vehiculo {
    // Propiedades
    public $marca;
    public $modelo;
    public $ano;

    // Constructor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para obtener información del vehículo
    public function obtener_info() {
        echo "Información del vehículo:\n";
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Año: " . $this->ano . "\n";
    }
}

// Clase Automovil que extiende de Vehiculo
class Automovil extends Vehiculo {
    // Propiedad adicional
    public $numero_puertas;

    // Constructor
    public function __construct($marca, $modelo, $ano, $numero_puertas) {
        parent::__construct($marca, $modelo, $ano);
        $this->numero_puertas = $numero_puertas;
    }

    // Método para obtener información del automóvil (incluyendo el número de puertas)
    public function obtener_info() {
        parent::obtener_info(); // Llama al método obtener_info de la clase Vehiculo
        echo "Número de puertas: " . $this->numero_puertas . "\n";
    }
}

// Crear una instancia de la clase Automovil
$mi_automovil = new Automovil("Ford", "Focus", 2023, 4);

// Llamar al método obtener_info para mostrar la información del automóvil
$mi_automovil->obtener_info();

?>