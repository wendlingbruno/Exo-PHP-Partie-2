<?php

$elements=[
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

function genererCheckbox($tableau){
    $result = "";
    $result .= "<form>";
    foreach($tableau as $choix => $check){
        $result .= "<input type=checkbox name=$choix $check/><label for=$choix>$choix</label><br>";
    }
    $result .= "</form>";
    return $result;
}

echo genererCheckbox($elements);



?>