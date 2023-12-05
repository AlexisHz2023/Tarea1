<?php

class Forma {
    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcular_area() {
        return $this->ancho * $this->alto;
    }
}

// Ejemplo de uso
$rectangulo = new Forma(5, 8);
echo "Área del rectángulo: " . $rectangulo->calcular_area() . PHP_EOL;

?>