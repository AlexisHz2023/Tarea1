<?php

class Gato extends Animal {
    private $pelaje;

    public function __construct($nombre, $edad, $pelaje) {
        parent::__construct($nombre, $edad);
        $this->pelaje = $pelaje;
    }

    public function hacer_ruido() {
        return "¡Miau!"; // Maullido específico para la clase Gato
    }

    public function obtener_info() {
        $info_animal = parent::obtener_info();
        return "{$info_animal}, Pelaje: {$this->pelaje}";
    }
}

// Ejemplo de uso
$gato = new Gato("Whiskers", 2, "Pelaje suave");
echo $gato->obtener_info() . PHP_EOL;
echo $gato->hacer_ruido() . PHP_EOL;

?>