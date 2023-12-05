<?php

class Persona {
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function obtener_nombre_completo() {
        return "{$this->nombre} {$this->apellido}";
    }

    public function obtener_info() {
        return "Nombre: {$this->nombre}, Apellido: {$this->apellido}, Edad: {$this->edad} años";
    }
}

// Ejemplo de uso
$persona = new Persona("Juan", "Pérez", 30);
echo $persona->obtener_info() . PHP_EOL;
echo "Nombre completo: " . $persona->obtener_nombre_completo() . PHP_EOL;

?>