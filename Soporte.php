<?php
declare(strict_types=1);
include_once("Resumible.php");
abstract class Soporte implements Resumible
{

        private static int $IVA = 21;

        public function __construct(
                public string $titulo,
                protected int $numero,
                private float $precio
        ) {
        }



        /**
         * Get the value of precio
         */
        public function getPrecio()
        {
                return $this->precio;
        }
        /**
         * Get the value of precio with IVA
         */
        public function getPrecioConIva()
        {
                return $this->precio + $this->precio * self::$IVA / 100;
        }
        /**
         * Get the value of numero
         */
        public function getNumero()
        {
                return $this->numero;
        }

        // Muestra un resumen de los atributos de la clase
        public function muestraResumen()
        {
                echo "<br>Titulo: ".$this->titulo."<br>Número: ".$this->numero."<br>Precio: ".$this->precio."€"."<br>Precio con IVA: ".$this->getPrecioConIva()."€";
        }
}


/* Al hacer esta clase abstracta imposibilitamos su instanciación, 
de esta manera solo se prodrán crear objetos de sus clases "hijas" o "concretas".
Es por eso que si ejecutásemos el script "index1.php" saltaría el error
"Cannot instantiate abstract class Soporte".
*/