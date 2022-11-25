<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\util;
include_once("./autoload.php");
//include_once("VideoclubException.php");

class CupoSuperadoException extends VideoclubException{
    
    public function __construct(
        $message = "</br>El cupo de alquileres ha sido superado</br>",
        $code = 2
    )
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__.": [{$this->code}]: {$this->message}\n";
    }
}