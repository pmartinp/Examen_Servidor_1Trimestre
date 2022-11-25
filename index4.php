<?php
//Includes:
include "autoload.php";
use Examen_Servidor_1Trimestre\app\Cliente;
use Examen_Servidor_1Trimestre\app\CintaVideo;
use Examen_Servidor_1Trimestre\app\Juego;
use Examen_Servidor_1Trimestre\app\Disco;

//instanciamos un par de objetos cliente

$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

//mostramos el número de cada cliente creado 
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();

//instancio algunos soportes 
$soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
$soporte3 = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Disco("El Imperio Contraataca", 4, 3, "es,en","16:9");

//alquilo algunos soportes
$cliente1->alquilar($soporte1)->alquilar($soporte2)->alquilar($soporte3)->alquilar($soporte1)->alquilar($soporte4)->devolver(4);
//devuelvo un soporte que sí que tiene alquilado
$cliente1->devolver(23);
//alquilo otro soporte
$cliente1->alquilar($soporte4)->listaAlquileres();
//este cliente no tiene alquileres
$cliente2->devolver(2);