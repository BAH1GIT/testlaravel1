<body>
    @extends('layout.app')
    @section('content')



    <div class="col-6 p-3 mx-auto">
        <h1>EDIT//Section</h1>

        <form class="bg-info p-3" method="post" action="{{route('sections.update',$section->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label  text-white">Titre</label>
                <input type="text" class="form-control" id="title" placeholder="titre de votre section ici" name="title" value="{{$section->title}}">
            </div>

        
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

            </div>
        </form>
    </div>
    @endsection