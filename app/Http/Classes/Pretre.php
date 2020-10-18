<?php
namespace App\Http\Classes;



class Pretre
{
    private $couleur;
    private $propriete;
    private $methode;
    private $points_de_vie;
    private $armure;
    /**
       * Instantiate reporitory
       * 
       */
    public function __construct($personnage)
    {
        $this->couleur= "#ffffff";
        $this->propriete= "soin préféré";
        $this->methode= "Hymne Divin";
        $this->points_de_vie= "150";
        $this->armure= "Tissu";
        $this->specialisation=$personnage->specialisation->nom;
    }

    public function hymne_divin(){
        return "Je suis un prêtre avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un prêtre et mon ".$this->propriete." est ".$this->methode.".";
    }
    /**
     * Get the value of points_de_vie
     */ 
    public function getPoints_de_vie()
    {
        return $this->points_de_vie;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Get the value of armure
     */ 
    public function getArmure()
    {
        return $this->armure;
    }
}