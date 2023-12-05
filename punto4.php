<?php

class Animal {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function hacer_ruido() {
        return "El animal hace un ruido genérico.";
    }

    public function obtener_info() {
        return "Nombre: {$this->nombre}, Edad: {$this->edad} años";
    }
}

// Ejemplo




