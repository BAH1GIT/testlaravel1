


<body>
@extends('layout.app')
@section('content')



    <div class="col-6 p-3 mx-auto">
       <h1>Formulaire d'insertion de Categorie</h1>

        <form class="bg-info p-3" method="post" action="{{route('categories.store')}}">
            @csrf  
            <div class="mb-3">
                <label for="libele" class="form-label  text-white">libele</label>
                <input type="text" class="form-control" id="libele" placeholder="Ex:ordinateur" name="libele">
            </div>
        
             <div class="mb-3">
                <label for="description" class="form-label  text-white">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Ex:hp" name="description">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
@endsection


  
