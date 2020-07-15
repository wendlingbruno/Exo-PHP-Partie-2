<?php

class Voiture{
    private $marque;
    private $modele;

    public function __construct($marque,$modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getInfos(){
        return "Marque : ".$this->getMarque()." et modèle : ".$this->getModele()."<br>";
    }

    public function __toString(){
        return "Marque : ".$this->getMarque()." et modèle : ".$this->getModele()."<br>";
    }

}


class VoitureElec extends Voiture{

    private $autonomie;

    public function __construct($marque,$modele,$autonomie){
        parent::__construct($marque,$modele);
        $this->autonomie = $autonomie;
    }  

    public function getAutonomie(){
        return $this->autonomie;
    }

    public function getInfos(){
        return "Marque : ".$this->getMarque()." et modèle : ".$this->getModele()." avec une autonomie de ".$this->getAutonomie()." km.<br>";
    }

    public function __toString(){
        return "Marque : ".$this->getMarque()." et modèle : ".$this->getModele()." avec une autonomie de ".$this->getAutonomie()." km.<br>";
    }


}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);


echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

/*echo $v1;
echo $ve1;*/

?>