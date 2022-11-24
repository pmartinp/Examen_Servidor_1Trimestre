<?php
declare(strict_types=1);

class Cliente
{

    private $soportesAlquilados = [];
    private int $numSoportesAlquilados=0;

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ) {
    }



    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }
    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    /**
     * Get the value of numSoportesAlquilados
     */
    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    // comprueba si es posible alquilar un soporte y si lo es lo añade al array soportesAlquilados (lo alquila)
    public function alquilar(Soporte $s): bool{
        if(!$this->tieneAlquilado($s) && $this->numSoportesAlquilados < $this->maxAlquilerConcurrente){
            $this->numSoportesAlquilados++;
            $this->soportesAlquilados[]=$s;
            echo "<br>Alquiler realizado con éxito";
            
            return true;
        }else{
            echo "<br>No se pudo realizar el alquiler";
            return false;
        }
    }

    // comprueba si el parámetro $s está alquilado o no
    public function tieneAlquilado(Soporte $s): bool{
        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        }else{
            return false;
        }
    }

    //
    public function devolver(int $numSoporte): bool{
        echo "<br>";
        foreach ($this->soportesAlquilados as $key => $obj) {
            if($obj->getNumero()==$numSoporte){
                echo "<br>El soporte estaba alquilado";
                $this->numSoportesAlquilados--;
                unset($this->soportesAlquilados[$key]);
                echo "<br>El soporte ha sido devuelto con éxito";
                return true;
            }
        }
        echo "<br>El número de soporte no coincide con ningun alquiler vigente";
        echo "<br>No se pudo devolver el soporte";
        return false;
    }

    public function listaAlquileres(){
        echo "<br>";
        foreach ($this->soportesAlquilados as $obj) {
            print_r($obj);
            echo "<br>";
        }
    }

    // Muestra un resumen de los atributos de la clase
    public function muestraResumen()
    {
            echo "<br>Nombre: ".$this->nombre."<br>Cantidad de alquileres: ".sizeof($this->soportesAlquilados);
    }
}
