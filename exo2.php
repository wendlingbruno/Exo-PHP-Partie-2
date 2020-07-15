<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

echo "<style>
            table
            {
                border-collapse: collapse;
            }

            td, th
            {
                border: 1px solid black;
            }

            table, td, th{
                text-align: justify;
            }
    </style>";

function afficherTableHTML($tableau){
    ksort($tableau);
    $result = "";
    $result .= "<table> <thead> <tr><th> Pays </th><th> Capitale </th></tr> </thead> <tbody>";
    foreach ($tableau as $pays => $ville){
        $pays = strtoupper($pays);
        $result .=  "<tr><td> $pays </td><td> $ville </td></tr>";
        }
    $result .= "</tbody> </table>";
    return $result;
}

echo afficherTableHTML($capitales);




?>