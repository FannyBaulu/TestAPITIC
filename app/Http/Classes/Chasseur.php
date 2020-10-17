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
        $this->couleur= "#086a00";
        $this->propriete= "coup préféré";
        $this->methode= "hurlement_de_la_bete()";
        $this->points_de_vie= "150";
        $this->armure= "Cuir";
        $this->specialisation=$personnage->specialisation_id->nom;
    }

    public function hurlement_de_la_bete(){
        return "Je suis un chasseur avec la spécialisation".$this->specialisation.".";
    }
    public function details(){
        return "Je suis un chasseur et mon".$this->propriete."est".$this->methode.".";
    }
}