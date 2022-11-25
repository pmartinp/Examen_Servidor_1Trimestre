<?php
declare(strict_types=1);

function autoload($className){
    $path = str_replace("\\", "/", $className);
    include_once("../".$path.".php");
}

spl_autoload_register('autoload');
?>