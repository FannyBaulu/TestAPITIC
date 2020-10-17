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
        $this->methode= "hymne_divin()";
        $this->points_de_vie= "150";
        $this->armure= "Tissu";
        $this->specialisation=$personnage->specialisation_id->nom;
    }

    public function hymne_divin(){
        return "Je suis un prêtre avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un prêtre et mon".$this->propriete."est".$this->methode.".";
    }
}