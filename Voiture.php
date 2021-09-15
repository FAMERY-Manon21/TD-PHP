<?php
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un getter      
    public function getMarque() {
        return $this->marque;
    }
   
    // un setter 
    public function setMarque($m) {
        $this->marque = $m;
    }
   
    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    } 
              
    // une methode d'affichage.
    public function afficher() {
        echo "Voiture ". $this->getImmatriculation() ." de marque ". $this->getMarque()." (couleur". $this->getCouleur()." )";
    }

    public function getImmatriculation() {
        return $this->immatriculation;
    }
   

    // un setter 
    public function setImmatriculation($i) {
        if (strlen($i)<=8){
            $this->immatriculation = $i;
        }
    }

    public function getCouleur() {
        return $this->couleur;
    }
   
    // un setter 
    public function setCouleur($c) {
        $this->couleur = $c;
    }
}
?>