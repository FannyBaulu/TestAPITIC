@extends('layouts')
@section('content')
<form class="m-3">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Pseudo</label>
        <input class="form-control" placeholder="Pseudo">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputState">Race</label>
        <select id="inputState" class="form-control">
          <option selected>Choisir une race...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Classe</label>
        <select id="inputState" class="form-control">
          <option selected>Choisir une classe...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Spécialisation</label>
        <select id="inputState" class="form-control">
          <option selected>Choisir une spécialisation...</option>
          <option>...</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Créer le personnage</button>
</form>
@endsection