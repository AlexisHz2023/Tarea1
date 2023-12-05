<?php

class Circulo extends Forma {
    public function calcular_circunferencia() {
        // Utilizamos la fórmula: Circunferencia = 2 * pi * radio
        $radio = $this->ancho / 2; // asumimos que el ancho representa el diámetro
        $circunferencia = 2 * M_PI * $radio;
        return $circunferencia;
    }
}

// Ejemplo de uso
$circulo = new Circulo(10, 0); // El segundo parámetro (alto) es 0, ya que el círculo solo necesita un valor (diámetro)
echo "Área del círculo: " . $circulo->calcular_area() . PHP_EOL;
echo "Circunferencia del círculo: " . $circulo->calcular_circunferencia() . PHP_EOL;

?>