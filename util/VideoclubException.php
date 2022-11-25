<?php

declare(strict_types=1);

namespace Examen_Servidor_1Trimestre\util;

use Exception;

class VideoclubException extends Exception{

    public function __construct(
        $message,
        $code = 0,
        Exception $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__.": [{$this->code}]: {$this->message}\n";
    }
}