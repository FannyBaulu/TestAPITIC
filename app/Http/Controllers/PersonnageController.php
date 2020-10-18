<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Personnage;
use App\Models\Race;
use App\Models\Specialisation;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    /**
     * Affiche la liste des personnages de la guilde selon différent critères:
     * Par défault, ils sont triés par id, sinon ils sont triés soit par classe soit par spécialisation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($critere=null)
    {

        $personnages = Personnage::with('race','classe','specialisation')->orderBy($critere?:"id")->get();
        foreach($personnages as $personnage){
            $nomClasse = $personnage->classe->nom;
            $chemin="App\\Http\\Classes\\".$nomClasse;
            $creationClasse= new $chemin($personnage);
            $personnage->infoClasse=$creationClasse;
        }
        return view('personnage.index',['personnages'=>$personnages]);
    }

    public static function changeColor($nom,$personnage){
        if($personnage->proprietaire == 'Tom'){
            $tabNom = str_split ( $nom ,1);
            foreach ($tabNom as $value) {
                $str= "rgb(".rand(120,255).",".rand(120,255).",".rand(120,255).")";
                echo "<b style='color:".$str."'>".$value."</b>";
            }
        }
        else{
            echo $nom;
        }
        
    }
    /**
     * Renvoie vers la formulaire de création de personnage récupérant les informations des tables "classes" et "races".
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes=Classe::all();
        $races=Race::all();

        return view('personnage.create',[
            "classes"=>$classes,
            "races"=>$races,
        ]);
    }

    /**
     * Cette fonction récupère en requête la classe séléctionnée par l'utilisateur et va chercher les correspondances 
     * en base de données pour les renvoyer en suite.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function rechercheDynamique(Request $request){
       $specialisations=Specialisation::where('classe_id',$request->classe)->get();
       return ['specialisations'=>$specialisations];
    }
    /**
     * Insert, en base de données, un nouveau personnage après validation des données reçues via la requête.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|unique:personnages,pseudo',
            'proprietaire' => 'required',
            'race_id' => 'required|integer|between:1,4',
            'classe_id' => 'required|integer|between:1,4',
            'specialisation_id' => 'required|integer|between:1,12',
        ]);
        $personnage= new Personnage($request->all());
        $personnage->save();
        return redirect()->route('personnage.index');
    }

    /**
     * Renvoie vers le formulaire de modification de personnage récupérant les informations des tables "classes","races" et "spécialisations".
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnage $personnage)
    {
        $classes=Classe::all();
        $races=Race::all();
        $specialisations=Specialisation::all();
        return view('personnage.edit',['personnage'=>$personnage,"classes"=>$classes,
        "races"=>$races,'specialisations'=>$specialisations]);
    }

    /**
     * Modification d'un personnage en base de données après validation des données reçues via la requête.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnage $personnage)
    {
        $request->validate([
            'pseudo' => 'required',
            'proprietaire' => 'required',
            'race' => 'required|integer|between:1,4',
            'classe' => 'required|integer|between:1,4',
            'specialisation' => 'required|integer|between:1,12',
        ]);
        $personnage->pseudo=$request->pseudo;
        $personnage->proprietaire=$request->proprietaire;
        $personnage->race_id=$request->race;
        $personnage->classe_id=$request->classe;
        $personnage->specialisation_id=$request->specialisation;
        $personnage->save();
        return redirect()->route('personnage.index');
    }

    /**
     * Suppression d'un personnage en base de données.
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnage $personnage)
    {
        $personnage->delete();
        return redirect()->route('personnage.index');
    }
}
