<body>
    @extends('layout.app')
    @section('content')



    <div class="col-6 p-3 mx-auto">
        <h1>EDIT//Client</h1>

        <form class="bg-info p-3" method="post" action="{{route('clients.update',$client->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label  text-white">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Ex:hp" name="nom" value="{{$client->nom}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label  text-white">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Ex:ordinateur" name="email" value="{{$client->email}}">
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label text-white">Telephone</label>
                <input type="text" class="form-control" id="telephone" placeholder="Ex:hp" name="telephone" value="{{$client->telephone}}">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
    @endsection