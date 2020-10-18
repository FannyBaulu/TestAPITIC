<?php
namespace App\Http\Classes;



class Mage
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
        $this->couleur= "#00caf3";
        $this->propriete= "sort préféré";
        $this->methode= "Murmure de Magie";
        $this->points_de_vie= "100";
        $this->armure= "Tissu";
        $this->specialisation=$personnage->specialisation->nom;
    }

    public function murmure_de_magie(){
        return "Je suis un mage avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un mage et mon ".$this->propriete." est ".$this->methode.".";
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