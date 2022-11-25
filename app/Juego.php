<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\app;
include_once("./autoload.php");
//include_once("Soporte.php");

class Juego extends Soporte
{

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public string $consola,
        private int $minNumJugadores,
        private int $maxNumJugadores
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    // Muestra los jugadores mínimos y máximo
    public function muestraJugadoresPosibles()
    {
        if ($this->minNumJugadores == 1 && $this->maxNumJugadores == 1) {
            echo "<br>Para un jugador";
        } else if ($this->minNumJugadores == $this->maxNumJugadores && $this->maxNumJugadores > 1) {
            echo "<br>Para " . $this->minNumJugadores . " jugadores";
        } else {
            echo "<br>De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
        }
    }

    // Muestra un resumen de los atributos de la clase
    public function muestraResumen()
    {
        parent::muestraResumen();
        echo "<br>Consola: " . $this->consola;
        $this->muestraJugadoresPosibles();
    }
}
