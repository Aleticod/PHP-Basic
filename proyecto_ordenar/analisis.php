<?php

require 'main.php';
print_r($_REQUEST);

echo "</br>";

//$words = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

for ($i=0; $i < count($words); $i++) { 
    if($_REQUEST["word" . $i] == $words[$i]) {
        echo "La palabra es correcta" . "</br>";
    }
    else {
        echo "La palabra ingresado es incorrecta, la palabra correcta es " . $word[$i] . "</br>";
    }
}


// if($_REQUEST["word0"]  == $words[0])
//     echo "La palabra ingresada es correcta </br>";
// else
//     echo "La palabra es incorrecta. La palabra es $words[0] </br>";

// if ($_REQUEST["word1"] == $words[1])
//     echo "La palabra ingresada es correcta </br>";
// else
//     echo "La palabra es incorrecta. La palabra es $words[1] </br>";

// if ($_REQUEST["word2"] == $words[2])
//     echo "La palabra ingresada es correcta </br>";
// else
//     echo "La palabra es incorrecta. La palabra es $words[2] </br>";
?>
