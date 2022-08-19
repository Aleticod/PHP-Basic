<?php

function transform_hour($hour, $desc) {
    if($desc === 1) {
        if ($hour === 12)
            $hour_changed = 0;
        else
            $hour_changed = $hour;
    }
    else {
        $hour_changed = $hour + 12;
    }

    return $hour_changed;
}

function hour_militar() {
    $hours = (int) readline("Input de normal hour: ");
    $minutes = (int) readline("Input de minutes: ");
    $description = (int) readline("Input 1 it is AM or 2 if it is PM: ");

    $long_format_hour = transform_hour($hours, $description);
    echo "The militar hour is $long_format_hour : $minutes \n";
}


hour_militar();