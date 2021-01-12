<?php
    $longueur=9.0;
    $largeur=4.0;
    echo $longueur "<br/>".$largeur;

    echo "La longueur du rectangle est de $longueur <br/>";
    echo "La largeur du rectangle est de $largeur <br/>";

    $perimetre=($longueur+$largeur)*2;
    echo $perimetre;
    $demi_perimetre=$longueur+$largeur;
    echo $demi_perimetre;
    $surface=$longueur*$largeur;
    echo $surface;

    echo "Le perimètre du rectangle est $perimetre <br/>";
    echo "Le demi-périmètre du rectangle est $demi_perimetre <br/>";
    echo "La surface du rectangle est $surface <br/>";

?>