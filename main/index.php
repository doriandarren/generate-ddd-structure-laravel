<?php

include __DIR__ . "/../vendor/autoload.php";


if(!isset($argv[1]) || !isset($argv[2])){
    echo "Campos no validos";
    die();
}

$bounded = $argv[1];
$className = $argv[2];


$hello = new \Infinito\GenerateDDDStructure\StructureGenerator();
//$hello->sayHello("hola");
$hello->create($bounded, $className);

