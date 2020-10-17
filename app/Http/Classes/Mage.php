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
        $this->methode= "murmure_de_magie()";
        $this->points_de_vie= "100";
        $this->armure= "Tissu";
        $this->specialisation=$personnage->specialisation_id->nom;
    }

    public function murmure_de_magie(){
        return "Je suis un mage avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un mage et mon".$this->propriete."est".$this->methode.".";
    }
}