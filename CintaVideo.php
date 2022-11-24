<?php
declare(strict_types=1);
include_once("Soporte.php");

class CintaVideo extends Soporte
{

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public int $duracion
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    // Muestra un resumen de los atributos de la clase
    public function muestraResumen()
    {
        parent::muestraResumen();
        echo "<br>Duración: ".$this->duracion."min";
    }
}
