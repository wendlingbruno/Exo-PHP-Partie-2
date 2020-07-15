<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

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
    $result .= "<table> <thead> <tr><th>Pays</th><th>Capitale</th><th>Lien Wiki</th></tr> </thead> <tbody>";
    foreach ($tableau as $pays => $ville){
        $pays = strtoupper($pays);
       $result .= "<tr><td> $pays </td><td> $ville </td><td><a href=https://fr.wikipedia.org/wiki/$ville target=_blank>Lien</a></tr>";
        }
    $result .= "</tbody> </table>";
    return $result;
}

echo afficherTableHTML($capitales);




?>