<?php
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($formulaire){
    $result = "";
    $result .= "<form>";
    foreach($formulaire as $champs){
        $result .= "<label for=$champs>$champs</label><br><input type=text name=$champs required/><br>";
    }
    $result .= "</form>";
    return $result;
}
echo afficherInput($nomsInput);
?>