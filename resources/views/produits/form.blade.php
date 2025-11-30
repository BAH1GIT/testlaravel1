@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="col">
        <h3 class="text-center text-secondary bg-white rounded-3 p-1">Page Ajout produit</h3>
    </div>
    <form class="bg-info p-3 rounded-3 " method="post" action="{{ route('produits.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-3">
                <div class="mb-1">
                    <label class="form-label text-white">Catégorie</label>
                    <select name="categorie_id" class="form-select">
                        <option value="">Sélectionner une catégorie</option>
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libele }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label class="form-label text-white">Product Image</label>
                    <div class="bg-light border rounded-3 mb-2" style="width: 100%; height: 125px;">
                        <img src="" class="img-fluid" alt="">
                    </div>
                    <input type="file" class="form-control mb-1" id="product_image1" name="product_image1">
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="product_title" class="form-label  text-white">Titre du produit</label>
                            <input type="text" class="form-control" id="product_title" placeholder="Ex:mangue" name="product_title">
                        </div>

                        <div class="mb-1">
                            <label for="product_price" class="form-label  text-white"> Prix du produit</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Ex:2000,00" name="product_price">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="selectSection" class="form-label text-white">Section</label>
                            <select name="section_id" id="selectSection" class="form-select">
                                <option value="">Selectionner une section</option>
                                @foreach ($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="product_keywords" class="form-label  text-white"> Mots clé du produit</label>
                            <input type="text" class="form-control" id="product_keywords" placeholder="Les mots clé du produit" name="product_keywords">
                        </div>
                    </div>
                </div>

                <label for="product_description" class="form-label  text-white">Description du produit</label>
                <textarea class="col-12 mb-1" name="product_description" rows="2" id="product_description"></textarea>

                <div class="row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary col-12 text-white " value="Ajouter Produit">
                    </div>
                    <div class="col-6">
                        <a href="{{ route('produits.index') }}" class="btn btn-warning col-12 text-white ">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection