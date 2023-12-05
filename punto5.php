<?php

class Perro extends Animal {
    private $raza;

    public function __construct($nombre, $edad, $raza) {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function hacer_ruido() {
        return "¡Guau!"; // Ladrido específico para la clase Perro
    }

    public function obtener_info() {
        $info_animal = parent::obtener_info();
        return "{$info_animal}, Raza: {$this->raza}";
    }
}

// Ejemplo de uso
$perro = new Perro("Fido", 3, "Labrador");
echo $perro->obtener_info() . PHP_EOL;
echo $perro->hacer_ruido() . PHP_EOL;

?>