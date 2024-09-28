
@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-6">
        <form method="POST" action="{{route('voiture.store')}}" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">marque</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marque">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">model</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="model">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Annee</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="anne">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">prix</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="prix">
              </div>
           
            <button type="submit" class="btn btn-success">Enregistrer </button>
          </form>
    </div>
</div>
@endsection