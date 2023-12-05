<?php

class Programador extends Empleado {
    private $lenguaje;

    public function __construct($nombre, $apellido, $sueldo, $lenguaje) {
        parent::__construct($nombre, $apellido, $sueldo);
        $this->lenguaje = $lenguaje;
    }

    public function calcular_salario_neto() {
        // Calcular el salario neto base usando el método de la clase Empleado
        $salario_neto_base = parent::calcular_salario_neto();

        // Agregar un bono adicional para el programador experto en un lenguaje
        $bono_lenguaje = 0.08 * $this->sueldo; // Ejemplo: bono del 8% del sueldo
        $salario_neto_programador = $salario_neto_base + $bono_lenguaje;

        return $salario_neto_programador;
    }

    public function obtener_info() {
        $info_empleado = parent::obtener_info();
        return "{$info_empleado}, Lenguaje: {$this->lenguaje}";
    }
}

// Ejemplo de uso
$programador = new Programador("Carlos", "Sánchez", 55000, "PHP");
echo $programador->obtener_info() . PHP_EOL;
echo "Salario Neto del Programador: " . $programador->calcular_salario_neto() . PHP_EOL;

?>