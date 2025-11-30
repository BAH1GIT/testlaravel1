


<body>
@extends('layout.app')
@section('content')



    <div class="col-6 p-3 mx-auto">
       <h1>Formulaire d'insertion de Section</h1>

        <form class="bg-info p-3" method="post" action="{{route('sections.store')}}">
            @csrf  
            <div class="mb-3">
                <label for="section_title" class="form-label  text-white">Title</label>
                <input type="text" class="form-control" id="section_title" placeholder="titre de votre section ici" name="title">
            </div>
        
           
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
@endsection


  
