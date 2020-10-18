<?php
namespace App\Http\Classes;



class Chasseur
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
        $this->couleur= "#213e3b";
        $this->propriete= "coup préféré";
        $this->methode= "Hurlement de la Bête";
        $this->points_de_vie= "150";
        $this->armure= "Cuir";
        $this->specialisation=$personnage->specialisation->nom;
    }

    public function hurlement_de_la_bete(){
        return "Je suis un chasseur avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un chasseur et mon ".$this->propriete." est ".$this->methode.".";
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Get the value of points_de_vie
     */ 
    public function getPoints_de_vie()
    {
        return $this->points_de_vie;
    }

    /**
     * Get the value of armure
     */ 
    public function getArmure()
    {
        return $this->armure;
    }
}