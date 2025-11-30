


<body>
@extends('layout.app')
@section('content')



    <div class="col-6 p-3 mx-auto">
       <h1>Formulaire d'insertion de Client</h1>

        <form class="bg-info p-3" method="post" action="{{route('clients.store')}}">
            @csrf  
            <div class="mb-3">
                <label for="nom" class="form-label  text-white">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Saisissaez votre nom" name="nom">
            </div>
        
             <div class="mb-3">
                <label for="email" class="form-label  text-white">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Ex:ba@gmail.com" name="email">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label  text-white">Telephone</label>
                <input type="text" class="form-control" id="telephone" placeholder="Ex:+221 77 135 65 43 " name="telephone">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
@endsection


  
