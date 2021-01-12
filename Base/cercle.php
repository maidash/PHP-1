<?php
    $rayon=rand(0,250);
    define("PI",3.14);
    echo $rayon;
    $aire= PI *($rayon*$rayon);
    $phrase="l'aire du cercle de rayon $rayon est $aire"; 
    $circonference=2*PI*$rayon;

    echo $aire;
    echo $phrase;
    echo $circonference;

    echo "Le rayon du cercle est $rayon <br/>";
    echo "L'aire du cercle est $aire <br/>";
    echo "La circonférence du cercle est $circonference <br/>"
?>