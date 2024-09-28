

@extends('layout.app')
@section('content')
    
<div class="card" style="width: 18rem;">
    <img src=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$categorie->nom}}</h5>
      <p class="card-text">{{$categorie->description}}</p>
      <p class="card-text">{{$categorie->create_at}}</p>
      <a href="{{route('categorie.index')}}" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
@endsection




<p>
    
   
</p>
