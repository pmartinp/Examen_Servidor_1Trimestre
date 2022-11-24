<?php
declare(strict_types=1);

class Soporte
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

        public function muestraResumen()
        {
                echo "<br>Titulo: ".$this->titulo."<br>Número: ".$this->numero."<br>Precio: ".$this->precio."€";
        }
}
