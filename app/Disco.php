<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\app;
include_once("./autoload.php");
//include_once("Soporte.php");

class Disco extends Soporte
{

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public string $idiomas,
        private string $formatoPantalla
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    // Muestra un resumen de los atributos de la clase
    public function muestraResumen()
    {
        parent::muestraResumen();
        echo "<br>Idiomas: " . $this->idiomas . "<br>Formato de Pantalla: " . $this->formatoPantalla;
    }
}
