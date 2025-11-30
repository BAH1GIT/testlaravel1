<body>
    @extends('layout.app')
    @section('content')



    <div class="col-6 p-3 mx-auto">
        <h1>EDIT//Vendeur</h1>

        <form class="bg-info p-3" method="post" action="{{route('vendeurs.update',$vendeur->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label  text-white">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Ex:hp" name="nom" value="{{$vendeur->nom}}">
            </div>
        
            <div class="mb-3">
                <label for="poste" class="form-label text-white">Poste</label>
                <input type="text" class="form-control" id="poste" placeholder="Ex:hp" name="poste" value="{{$vendeur->poste}}">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
    @endsection