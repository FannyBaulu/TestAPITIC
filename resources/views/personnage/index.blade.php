@extends('layouts')
@section('content')

<table class="table table-dark">
    <thead>
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
    <tbody>
      @foreach ($personnages as $personnage)
          <tr>
            <th scope="row">{{$personnage->id}}</th>
              <td>{{$personnage->pseudo}}</td>
              <td>{{$personnage->race}}</td>
              {{-- <td>{{$personnage->race->point_de_vie}}</td>
              <td>{{$personnage->race->armure}}</td>
              <td>{{$personnage->race->details()}}</td> --}}
              <td>{{$personnage->proprietaire}}</td>
          </tr>
      @endforeach
      
      
  
@endsection
