<?php


$nomsRadio=[
        "Monsieur",
        "Madame",
        "Mademoiselle"
];


function afficherRadio($tableau){
    $result = "";
    $result .= "<form>";
    foreach($tableau as $statut){
        $result .= "<label>$statut</label><input type=radio name=boutonradio1><br>";
    }
    $result .= "</form>";
    return $result;
}


echo afficherRadio($nomsRadio);