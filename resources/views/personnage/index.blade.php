@extends('layouts')
@section('content')

<div class="d-flex justify-content-center">
<div class="d-flex justify-content-between w-75">
  <div>
    <a class="btn btn-outline-primary" href="/triPar/classe_id" role="button">Trier par classe</a>
    <a class="btn btn-outline-primary" href="/triPar/specialisation_id" role="button">Trier par spécialisation</a>
  </div>
  <a class="btn btn-primary ml-auto m-1 p-2" href="{{route('personnage.create')}}" role="button">Ajouter un personnage</a>
</div>
</div>


<div class="row justify-content-center mt-4 ">
  <div class="col-auto w-75 border table-dark border-dark rounded p-0">
    <table class="table m-0 ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Race</th>
            <th scope="col">Points de vie</th>
            <th scope="col">Armure</th>
            <th scope="col">Détail</th>
            <th scope="col">Propriétaire</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody >
          @foreach ($personnages as $personnage)
              <tr class="text-center" style="color:white;">
                <th  scope="row">{{$personnage->id}}</th>
                  <td>{{$personnage->pseudo}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->race->nom}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->infoClasse->getPoints_de_vie()}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->infoClasse->getArmure()}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">
                    <img class="img-fluid" src="{{asset('images/'.$personnage->specialisation->icone)}}" alt="">
                    <div>{{$personnage->infoClasse->details()}}</div>
                  </td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->proprietaire}}</td>
                  <td class="d-flex flex-row justify-content-center justify-content-around">
                  <a class="btn btn-success m-1" href="{{route('personnage.edit',$personnage)}}">Modifier</a>
                  <form class="d-flex justify-content-center m-1" action="{{route('personnage.destroy',$personnage)}}" method="POST">
                    @csrf
                    {{method_field("DELETE")}}
                    <button class="btn btn-danger w-100" type='submit' >Supprimer</button>
                  </form>
                  </td>
              </tr>
          @endforeach
        <tbody>  
    </table> 
</div>
</div>     
  


@endsection

