<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));


function afficherInfos($infos){
    $dump = "";
    foreach ($infos as $infos2){
        $dump .= var_dump($infos2);

    }
    return $dump;

}

echo (afficherInfos($tableauValeurs));

?>