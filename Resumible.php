<?php

interface Resumible
{
    public function muestraResumen();
}

/* Los hijos no necesitan volver a implementar esta interfaz, ya que heredan el método
"muestraResumen" del padre. Cuándo lo declaras en la clase concreta lo único que se hace
es sobrescribir dicho método.
*/