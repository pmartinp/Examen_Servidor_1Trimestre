<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\util;
include_once("./autoload.php");
//include_once("VideoclubException.php");

class SoporteYaAlquiladoException extends VideoclubException{
    
    public function __construct(
        $message = "</br>El soporte se encuentra alquilado</br>",
        $code = 4
    )
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__.": [{$this->code}]: {$this->message}\n";
    }
}