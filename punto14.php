<?php

class Gerente extends Empleado {
    private $departamento;

    public function __construct($nombre, $apellido, $sueldo, $departamento) {
        parent::__construct($nombre, $apellido, $sueldo);
        $this->departamento = $departamento;
    }

    public function calcular_salario_neto() {
        // Calcular el salario neto base usando el método de la clase Empleado
        $salario_neto_base = parent::calcular_salario_neto();

        // Agregar un bono adicional para el gerente
        $bono_gerente = 0.05 * $this->sueldo; // Ejemplo: bono del 5% del sueldo
        $salario_neto_gerente = $salario_neto_base + $bono_gerente;

        return $salario_neto_gerente;
    }

    public function obtener_info() {
        $info_empleado = parent::obtener_info();
        return "{$info_empleado}, Departamento: {$this->departamento}";
    }
}

// Ejemplo de uso
$gerente = new Gerente("Ana", "Gómez", 60000, "Ventas");
echo $gerente->obtener_info() . PHP_EOL;
echo "Salario Neto del Gerente: " . $gerente->calcular_salario_neto() . PHP_EOL;

?>