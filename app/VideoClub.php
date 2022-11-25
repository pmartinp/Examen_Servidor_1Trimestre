<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\app;

use Examen_Servidor_1Trimestre\util\ClienteNoEncontradoException;
use Examen_Servidor_1Trimestre\util\CupoSuperadoException;
use Examen_Servidor_1Trimestre\util\SoporteYaAlquiladoException;

include_once("./autoload.php");
//include_once("CintaVideo.php");
//include_once("Cliente.php");
//include_once("Disco.php");
//include_once("Juego.php");

class VideoClub
{

    private $productos = [];
    private static int $numProductos = 0;
    private $socios = [];
    private static int $numSocios = 0;

    public function __construct(
        private string $nombre
    ) {
    }

    // incluye productos en el array $productos
    private function incluirProducto(Soporte $s)
    {
        $this->productos[] = $s;
    }

    // añade una cinta de video al videoclub y aumenta en +1 $numProductos
    public function incluirCintaVideo($titulo, $precio, $duracion)
    {
        $cintaVideo = new CintaVideo($titulo, self::$numProductos, $precio, $duracion);
        $this->incluirProducto($cintaVideo);
        self::$numProductos++;
    }

    // añade un dvd al videoclub y aumenta en +1 $numProductos
    public function incluirDVD($titulo, $precio, $idiomas, $pantalla)
    {
        $dvd = new Disco($titulo, self::$numProductos, $precio, $idiomas, $pantalla);
        $this->incluirProducto($dvd);
        self::$numProductos++;
    }

    // añade un juego al videoclub y aumenta en +1 $numProductos
    public function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ)
    {
        $juego = new Juego($titulo, self::$numProductos, $precio, $consola, $minJ, $maxJ);
        $this->incluirProducto($juego);
        self::$numProductos++;
    }

    // añade un socio al videoclub y aumenta en +1 $numSocios
    public function incluirSocio($nombre, $maxAlquileresConcurrentes = 3)
    {
        $socio = new Cliente($nombre, self::$numSocios, $maxAlquileresConcurrentes);
        $this->socios[] = $socio;
        self::$numSocios++;
    }

    // muestra todos los productos del videoclub
    public function listarProductos()
    {
        echo "<br><br>";
        foreach ($this->productos as $obj) {
            print_r($obj);
            echo "<br>";
        }
    }

    // muestra todos los socios del videoclub
    public function listarSocios()
    {
        echo "<br><br>";
        foreach ($this->socios as $obj) {
            print_r($obj);
            echo "<br>";
        }
    }

    // relaciona el método "alquilar" de la clase socio con un objeto heradado de soporte del array "$productos"
    public function alquilaSocioProducto($numeroCliente, $numeroSoporte)
    {
        try {
            // recorro el array "$socios"
            foreach ($this->socios as $key => $obj) {
                //si el número de algún socio coincide con el parámetro "$numCliente" recorro el array "$productos"
                if ($obj->getNumero() == $numeroCliente) {
                    try {
                        // recorro el array "$productos"
                        foreach ($this->productos as $value => $prod) {
                            // si el parámetro "$numeroSoporte" coincide con algún número de productos el socio alquilará el producto
                            if ($prod->getNumero() == $numeroSoporte) {
                                $obj->alquilar($prod);
                                return $this;
                            }
                        }
                    } catch (SoporteYaAlquiladoException $e) {
                        echo $e->getMessage();
                    } catch (CupoSuperadoException $e) {
                        echo $e->getMessage();
                    }
                }
            }
            // en el caso de que salgamos del foreach sin lanzar ninguna exception significará que no encontro ningún cliente
            throw new ClienteNoEncontradoException();
        } catch (ClienteNoEncontradoException $e) {
            echo $e->getMessage();
        }
        return $this;
    }
}
