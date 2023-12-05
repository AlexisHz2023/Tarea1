<?php

class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $apellido, $edad, $carrera) {
        parent::__construct($nombre, $apellido, $edad);
        $this->carrera = $carrera;
    }

    public function obtener_nombre_completo() {
        return parent::obtener_nombre_completo() . " ({$this->carrera})";
    }

    public function obtener_info() {
        $info_persona = parent::obtener_info();
        return "{$info_persona}, Carrera: {$this->carrera}";
    }
}

// Ejemplo de uso
$estudiante = new Estudiante("María", "Gómez", 22, "Ingeniería Informática");
echo $estudiante->obtener_info() . PHP_EOL;
echo "Nombre completo con carrera: " . $estudiante->obtener_nombre_completo() . PHP_EOL;

?>