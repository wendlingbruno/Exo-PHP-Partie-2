<?php

$monmot="Salut";

function convertirMajRouge($mot){
    $mot = mb_strtoupper($mot);
    return "<p style=color:red;>$mot</p>";
}


echo convertirMajRouge($monmot);

?>