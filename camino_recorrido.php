<?php
// 1 - 2 -> 1
// 1 - 3 -> 2
// 1 - 4 -> 3
// 1 - 5 -> 5
// 1 - 6 -> 8
// 1 - 7 -> 13

$numero_de_tienda = readline("Dime a que tienda quieres ir: ");
$anterior = 0;
$actual = 1;  // El primer caso cuando numero de tienda es 0

for ($i=2; $i <= $numero_de_tienda; $i++) { 
    $actual += $anterior;
    $anterior = $actual - $anterior;
}

echo "para llegar a la tienda $numero_de_tienda se tiene $actual opciones \n";


?>