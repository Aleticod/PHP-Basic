<?php
function obtener_hora() {
    
    return date("h:i a");

}

echo "Hola me podrias decir la hora: \n";
echo "claro son las: " . obtener_hora(). "\n";