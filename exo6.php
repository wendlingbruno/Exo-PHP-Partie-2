<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($eleListe){
    $result = "";
    $result .= "<form> <select name=statut>";
    foreach($eleListe as $statut){
        $result .= "<option value=$statut>$statut</option>";
    }
    $result .= "</select> </form>";
    return $result;
}

echo alimenterListeDeroulante($elements);

?>