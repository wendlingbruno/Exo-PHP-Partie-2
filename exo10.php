<?php

$nomsInput = array("Nom","Prénom","Ville","Mail");
$elements = array("Développeur logiciel","Designer web","Intégrateur","Chef de projet");
$nomsRadio=[
    "Homme",
    "Femme",
    "Autre"
];


function afficherInput($formulaire){
    $resultInput = "";
    foreach($formulaire as $champs){
        if ($champs != "Mail")
        {
            $resultInput .= "<label for=$champs>$champs</label><br><input type=text name=$champs required/><br>";
        }else {
            $resultInput .= "<label for=$champs>$champs</label><br><input type=email name=$champs required/><br>";
        }
    }
    return $resultInput;
}

function afficherRadio($tableau){
    $resultRadio = "";
    foreach($tableau as $statut){
        $resultRadio .= "<label>$statut</label><input type=radio name=boutonradio1 required><br>";
    }
    return $resultRadio;
}


function alimenterListeDeroulante($eleListe){
    $resultJob = "";
    $resultJob .= "<select name=statut>";
    foreach($eleListe as $statut){
        $resultJob .= "<option value=$statut>$statut</option>";
    }
    $resultJob .= "</select>";
    return $resultJob;
}

function creerFormulaire($tableauInput,$tableauSexe,$tableauChoix,$nomFormulaire){
    $bouton = "";
    echo "<form action=exo10.php method=GET class=$nomFormulaire>";
    echo afficherInput($tableauInput);
    echo afficherRadio($tableauSexe);
    echo alimenterListeDeroulante($tableauChoix);
    $bouton .= "<br> <input type=submit value=Envoyer le formulaire> </form>";
    return $bouton;
}

echo creerFormulaire($nomsInput,$nomsRadio,$elements, "Formulaire1");

?>