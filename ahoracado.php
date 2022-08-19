<?php

function clear() {
    if (PHP_OS === "WINNT") {
        system("cls");
    }
    else {
        system("clear");
    }
}

$possible_words = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto",
"Baldosa", "Terremoto", "Asteroide", "Gallo", "Platizi"];


define("MAX_ATTEMPS", 6);

echo "Juego del ahoracado!\n\n";

// Inicializaos el juego
$choosen_word = $possible_words[rand(0,9)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discoverd_letter = str_pad("", $word_length, "-");

$attemps = 0;

do {


    echo "Es una palabra de $word_length letras" . "\n\n";
    echo $discoverd_letter . "\n\n";

    echo "\n";

    // Pedimos al usuaro que escriba una letra
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($choosen_word, $player_letter)) {
        // Verificamos todas las ocurrencias de esta letra
        $offset = 0;
        while(($letter_position = strpos($choosen_word, $player_letter, $offset) )!== false) {
            $discoverd_letter[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }        
    }
    else {
        clear();
        $attemps ++;
        echo "Letra incorrecta! te quedan " . (MAX_ATTEMPS - $attemps) . " intentos \n";
        sleep(2);
    }
    clear();

} while($attemps < MAX_ATTEMPS && $discoverd_letter !== $choosen_word);

clear();
if ($attemps < MAX_ATTEMPS)
    echo "Felicidades has adivinado la palabra. \n\n";
else
    echo "Suerte para la proxima, amigo";

echo "la palabra es $choosen_word \n";
echo "La palabra que tu descubriste es $discoverd_letter \n";
echo "\n";

