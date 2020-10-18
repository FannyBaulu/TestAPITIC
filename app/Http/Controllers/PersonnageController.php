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
     * Display a listing of the resource.
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

    /**
     * Show the form for creating a new resource.
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
     * Get selectors value to adapt other selectors with database information.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function rechercheDynamique(Request $request){
       $specialisations=Specialisation::where('classe_id',$request->classe)->get();
       return ['specialisations'=>$specialisations];
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|unique:personnages,pseudo',
            'proprietaire' => 'required|unique:personnages,proprietaire',
            'race_id' => 'required|integer|between:1,4',
            'classe_id' => 'required|integer|between:1,4',
            'specialisation_id' => 'required|integer|between:1,12',
        ]);
        $personnage= new Personnage($request->all());
        $personnage->save();
        return redirect()->route('personnage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
