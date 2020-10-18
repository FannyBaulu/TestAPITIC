@extends('layouts')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<form action="{{route('personnage.store')}}" method="POST" class="m-3">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Pseudo</label>
        <input type="text" class="form-control" placeholder="Pseudo" name="pseudo" value="{{old('pseudo')}}">
      </div>
      <div class="form-group col-md-6">
        <label>Propriétaire</label>
        <input type="text" class="form-control" placeholder="Propriétaire" name="proprietaire" value="{{old('proprietaire')}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label >Race</label>
      <select  class="form-control" name="race">
          <option selected>Choisir une race...</option> 
          @foreach ($races as $race)
              <option value={{$race->id}}>{{$race->nom}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4">
        <label >Classe</label>
        <select id="classe" class="form-control" name="classe">
          <option selected>Choisir une classe...</option>
          @foreach ($classes as $classe)
              <option value={{$classe->id}}>{{$classe->nom}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-4">
        <label >Spécialisation</label>
        <select id="specialisation" class="form-control" name="specialisation">
          <option selected>Choisir une spécialisation...</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Créer le personnage</button>
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
                select.innerHTML=""
                for(let i=0;i<tab.length;i++){
                    select.innerHTML+= '<option value='+tab[i].id+'>'+tab[i].nom+'</option>'
                }
            }
    </script>
@endsection