<?php

class Rectangulo extends Forma {
    public function calcular_perimetro() {
        return 2 * ($this->ancho + $this->alto);
    }
}

// Ejemplo de uso
$rectangulo = new Rectangulo(5, 8);
echo "Área del rectángulo: " . $rectangulo->calcular_area() . PHP_EOL;
echo "Perímetro del rectángulo: " . $rectangulo->calcular_perimetro() . PHP_EOL;

?>