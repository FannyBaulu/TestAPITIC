@extends('layouts')
@section('content')

<div class="d-flex justify-content-center">
  <a class="btn btn-outline-primary " href="{{route('personnage.create')}}" role="button">Ajouter un personnage</a>
</div>


<div class="row justify-content-center mt-4 ">
  <div class="col-auto w-75 border border-dark rounded p-0">
    <table class="table m-0 table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Race</th>
            <th scope="col">Points de vie</th>
            <th scope="col">Armure</th>
            <th scope="col">Détail</th>
            <th scope="col">Propriétaire</th>
          </tr>
        </thead>
        <tbody >
          @foreach ($personnages as $personnage)
              <tr style="color:black" >
                <th  scope="row">{{$personnage->id}}</th>
                  <td>{{$personnage->pseudo}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->race->nom}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->infoClasse->getPoints_de_vie()}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->infoClasse->getArmure()}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->infoClasse->details()}}</td>
                  <td style="background-color:{{$personnage->infoClasse->getCouleur()}}">{{$personnage->proprietaire}}</td>
              </tr>
          @endforeach
        <tbody>  
    </table> 
</div>
</div>     
  


@endsection

