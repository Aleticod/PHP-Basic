<?php

$words = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");
$form = "<form action = 'analisis.php'>";
$button = "<button type = 'submit'>Enviar</button>";
$form_close = "</form>";


for ($i = 0; $i < count($words); $i++) {
    $form .= "La palabra: " . str_shuffle($words[$i]) . " " .
    "<input type = 'text' name = 'word" . $i . "'>" .
    "</br>";
}




echo $form . $button . $form_close;

?>