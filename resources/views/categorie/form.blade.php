@extends('layout.app')
@section('content')

<div class="row">
  <div class="col-6">
      <form method="POST" action="{{route('categorie.store')}}" >
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description">
          </div>
         
          <button type="submit" class="btn btn-success">Enregistrer </button>
        </form>
  </div>
</div>
@endsection