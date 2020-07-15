<?php


$url = "http://my.mobirise.com/data/userpic/764.jpg";


function repeterImage($lien, $nbBoucle){
    $result = "<img src=$lien alt=Une image>";
    return str_repeat(($result), $nbBoucle);
}

echo repeterImage($url,4);


?>