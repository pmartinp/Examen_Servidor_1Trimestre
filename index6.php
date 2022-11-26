<?php
// Archivo para probar métodos de la clase videoclub
include "autoload.php";
use Examen_Servidor_1Trimestre\app\VideoClub;

$vc = new Videoclub("Severo 8A");

//voy a incluir unos cuantos soportes de prueba
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es", "16:9");
$vc->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
$vc->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

//listo los productos
$vc->listarProductos();

//voy a crear algunos socios
$vc->incluirSocio("Amancio Ortega");
$vc->incluirSocio("Pablo Picasso", 6);

// para poder probarlo haría falta cambiar a "public" la propiedad $productos de la clase "Videoclub"
$vc->alquilaSocioProductos(1, [$vc->productos[2], $vc->productos[4], $vc->productos[3]])->listarSocios();

$vc->devolverSocioProductos(1, [$vc->productos[2], $vc->productos[4]])->listarSocios();

$vc->devolverSocioProducto(1, 3)->listarSocios();
