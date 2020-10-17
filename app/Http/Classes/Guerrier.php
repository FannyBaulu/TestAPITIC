<?php
namespace App\Http\Classes;



class Guerrier
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
        $this->couleur= "#553d23";
        $this->propriete= "coup préféré";
        $this->methode= "cri_de_guerre()";
        $this->points_de_vie= "200";
        $this->armure= "Titane";
        $this->specialisation=$personnage->specialisation_id->nom;
    }

    public function cri_de_guerre(){
        return "Je suis un guerrier avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un guerrier et mon".$this->propriete."est".$this->methode.".";
    }
}