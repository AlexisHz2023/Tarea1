<?php

class Empleado {
    private $nombre;
    private $apellido;
    private $sueldo;

    public function __construct($nombre, $apellido, $sueldo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    public function calcular_salario_neto() {
        // Simplemente como ejemplo, se resta un 10% como impuesto
        $impuesto = 0.10 * $this->sueldo;
        // Otros descuentos o cálculos podrían ir aquí

        $salario_neto = $this->sueldo - $impuesto;

        return $salario_neto;
    }

    public function obtener_info() {
        return "Nombre: {$this->nombre}, Apellido: {$this->apellido}, Sueldo: {$this->sueldo}";
    }
}

// Ejemplo de uso
$empleado = new Empleado("Juan", "Pérez", 50000);
echo $empleado->obtener_info() . PHP_EOL;
echo "Salario Neto: " . $empleado->calcular_salario_neto() . PHP_EOL;

?>