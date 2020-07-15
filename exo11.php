<?php


function formaterDateFr($date){
    setlocale(LC_TIME, "fr_FR"); // on passe au format local et français
    $date = utf8_encode(strftime("%A %d %B %Y", strtotime($date))); // utf8 à cause de l'accent
    return $date;
}

echo formaterDateFr("2018-02-23");

?>