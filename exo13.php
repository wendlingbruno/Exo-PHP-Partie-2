<?php

class Voiture{

    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $demarrer;

    function __construct($marque="",$modele="",$nbPortes=3,$vitesseActuelle=0,$demarrer=false){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
        $this->demarrer = $demarrer;
    }



    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function getVitesseActuelle(){
        return "La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de ".$this->vitesseActuelle." km/h. <br>";
    }


    function getDemarrer(){ // ne sert que de verif
        return $this->demarrer;
    }

    function setDemarrer(){ // permet d'alternet entre démarré et stoppé en une seule fois
        if (!$this->getDemarrer()){
        $this->demarrer = true;
        } else {
            $this->demarrer = false;
        }
    }

    public function setVitesseActuelle($vitesse, $a)
    {

            if ($a == 2){ // accelerer
                $this->vitesseActuelle = $vitesse + $this->vitesseActuelle; // pour faire en sorte que la vitesse actuelle soit juste
            } else if ($a == 1){ // ralentir
                $this->vitesseActuelle = $this->vitesseActuelle - $vitesse;
            } else if ($a == 0){ // stop
                $this->vitesseActuelle = 0;
            }
    }



    public function demarrer(){
        if (!$this->getDemarrer()){
            $this->setDemarrer();
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre <br>";
        } else {
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." est déjà démarré ! <br>";
        } 

    }

    public function accelerer($vitesse){
        if (!$this->getDemarrer()){
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut acccélèrer de ".$vitesse." km/h. <br> Pour accélérer, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele()." ! <br>";
        } else {
            $this->setVitesseActuelle($vitesse, 2); // 2 = accelerer
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." acccélère de ".$vitesse." km/h. <br>";
        }
    }

    public function ralentir($vitesse){
        if (!$this->getDemarrer()){
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut ralentir de ".$vitesse." km/h. <br> Pour ralentir, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele()." ! <br>";
        } else {
            $this->setVitesseActuelle($vitesse, 1); // 1 = ralentir
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." ralentit de ".$vitesse." km/h. <br>";
        }
    }

    public function stopper(){
        if ($this->getDemarrer()){
            $this->setDemarrer();
            $this->setVitesseActuelle(0, 0); // 2e 0 = renvoyer à zéro
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." est stoppé <br>";
        } else {
            return "Le véhicule ".$this->getMarque()." ".$this->getModele()." est déjà stoppé <br>";
        }

    }

    public function __toString(){
        $infos = "";
        $infos .= "Infos véhicule ".spl_object_id($this)."<br>";
        $infos .= "****************<br>";
        $infos .= "Nom et modèle du véhicule :".$this->getMarque()." modèle : ".$this->getModele()."<br>";
        $infos .= "Nombre de portes : ".$this->getNbPortes()."<br>";
        if (!$this->getDemarrer()){
            $infos .= "Le véhicule ".$this->getMarque()." est à l'arrêt. <br>";
        }else {
            $infos .= "Le véhicule ".$this->getMarque()." est démarré. <br>";
        }
        $infos .= "Sa vitesse actuelle est de ".$this->vitesseActuelle." km/h. <br>";
        return $infos;
    }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);
echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v1->getVitesseActuelle();
echo $v1->ralentir(30);
echo $v1->getVitesseActuelle();
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();
echo $v1;
echo $v2;

?>