@extends('layout.app')
@section('content')


<div class="row">
    <div class="col-6">
        <form method="POST" action="{{route('produits.store')}}" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="description">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">prix</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="prix">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">quantite</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="quantite">
              </div>
              <label for="exampleInputPassword1" class="form-label">stock</label>
              <select class="form-select" aria-label="Default select example" name="sttock" aria-placeholder="selection une option ">
        
                <option value="disponible">disponible</option>
                <option value="indisponible">indisponible</option>
                <option value="en rupture">en rupture</option>
              </select>
              <label for="exampleInputPassword1" class="form-label">categorie</label>
              <select class="form-select" aria-label="Default select example" name="categorie_id" aria-placeholder="selection une option ">
        @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                @endforeach
              </select>
            <button type="submit" class="btn btn-success">Enregistrer </button>
          </form>
    </div>
  </div>
@endsection