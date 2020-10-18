@extends('layouts')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<form action="{{route('personnage.update',$personnage)}}" method="POST" class="m-3">
    @csrf
    {{method_field('PUT')}}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Pseudo</label>
        <input type="text" class="form-control" placeholder="Pseudo" name="pseudo" value="{{$personnage->pseudo}}">
      </div>
      <div class="form-group col-md-6">
        <label>Propriétaire</label>
        <input type="text" class="form-control" placeholder="Propriétaire" name="proprietaire" value="{{$personnage->proprietaire}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label >Race</label>
      <select  class="form-control" name="race">
          <option selected>Choisir une race...</option> 
          @foreach ($races as $race)
              <option value={{$race->id}}
                {{$race->id==$personnage->race_id?'selected':''}}>{{$race->nom}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4">
        <label >Classe</label>
        <select id="classe" class="form-control" name="classe">
          <option selected>Choisir une classe...</option>
          @foreach ($classes as $classe)
              <option value={{$classe->id}}
                {{$classe->id==$personnage->classe_id?'selected':''}}>{{$classe->nom}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4">
        <label >Spécialisation</label>
        <select id="specialisation" class="form-control" name="specialisation">
            @foreach ($specialisations as $specialisation)
            @if($personnage->classe_id==$specialisation->classe_id)
                <option value={{$specialisation->id}} {{$specialisation->id==$personnage->specialisation_id?'selected':''}}>{{$specialisation->nom}}</option>
            @endif
            @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier le personnage</button>
</form>
@endsection
@section('script')
    <script>
        let specialisations=null;
        var classe=document.getElementById("classe");
            classe.addEventListener('change',function(e){
                e.preventDefault();
                axios.get('/rechercheDynamique',{params:{classe:this.value}})
                .then((response)=>{
                    refreshSpecialisation(response.data.specialisations)
                }
                ).catch((error)=>{
                    console.log(error)
                })
            });
            function refreshSpecialisation(tab){
                select=document.getElementById('specialisation');
                select.innerHTML="";
                for(let i=0;i<tab.length;i++){
                    select.innerHTML+= '<option value='+tab[i].id+'>'+tab[i].nom+'</option>'
                }
            }
    </script>
@endsection