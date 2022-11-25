<?php
include "autoload.php";
use Examen_Servidor_1Trimestre\app\Disco;

$miDisco = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $miDisco->titulo . "</strong>";
echo "<br>Precio: " . $miDisco->getPrecio() . " euros";
echo "<br>Precio IVA incluido: ".  $miDisco->getPrecioConIva() . " euros";
$miDisco->muestraResumen();
