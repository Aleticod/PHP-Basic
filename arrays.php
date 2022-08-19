<?php

## Definicio de arreglos simples
$edades = [20, 18, 40];
$otherEdades = array(20, 18, 40);


# Definicion de arreglos asociativos
$edadesAsoc = array(
    "Carlos" => 20,
    "Michi" => 18,
    "Juan" => 40,
);


echo "La edad de carlos es: $edadesAsoc[Carlos]";
echo "\n";
echo "La edad de carlos es: {$edadesAsoc['Carlos']}";
echo "\n";

$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "santana",
    ),

    "Michi" => array(
        "edad" => 19,
        "apellido" => "suan",
    )
)
?>