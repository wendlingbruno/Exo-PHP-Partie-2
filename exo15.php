<?php

function verifMail($mail){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        return "L'adresse $mail est valide."; 
    }else {
        return "L'adresse $mail n'est pas valide.";
    }

}

$email = "elan@elan-formation.fr";
$email2 = "contact@elan";

echo verifMail($email)."<br>";
echo verifMail($email2)."<br>";

?>