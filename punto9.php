<?php

class Profesor extends Persona {
    private $materia;

    public function __construct($nombre, $apellido, $edad, $materia) {
        parent::__construct($nombre, $apellido, $edad);
        $this->materia = $materia;
    }

    public function obtener_nombre_completo() {
        return parent::obtener_nombre_completo() . " ({$this->materia})";
    }

    public function obtener_info() {
        $info_persona = parent::obtener_info();
        return "{$info_persona}, Materia: {$this->materia}";
    }
}

// Ejemplo de uso
$profesor = new Profesor("Dr. Rodríguez", "García", 45, "Matemáticas");
echo $profesor->obtener_info() . PHP_EOL;
echo "Nombre completo con materia: " . $profesor->obtener_nombre_completo() . PHP_EOL;

?>