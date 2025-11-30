@extends('layout.app')
@section('content')

<div class="col-md-8 mx-auto">
    <h1 class=" p-2 ">Ajoute Produit</h1>
    <form class="bg-info p-3 rounded-3 m-3" method="post" action="{{ route('produits.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="product_title" class="form-label  text-white">Titre du produit</label>
            <input type="text" class="form-control" id="product_title" placeholder="Ex:mangue" name="product_title">
        </div>
        <div class="mb-3">
            <label for="product_description" class="form-label  text-white">Description du produit</label>
            <input type="text" class="form-control" id="product_description" placeholder="La description du produit" name="product_description">
        </div>
        <div class="mb-3">
            <label for="product_keywords" class="form-label  text-white"> Mots clé du produit</label>
            <input type="text" class="form-control" id="product_keywords" placeholder="Les mots clé du produit" name="product_keywords">
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Catégorie</label>
            <select name="categorie_id" class="form-select">
                <option value="">Sélectionner une catégorie</option>
                @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->libele }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="selectSection" class="form-label text-white">Section</label>
            <select name="section_id" id="selectSection" class="form-select">
                <option value="">Selectionner une section</option>
                @foreach ($sections as $section)
                <option value="{{ $section->id }}">{{ $section->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="product_image1" class="form-label  text-white"> Image1 du produit</label>
            <input type="file" class="form-control" id="product_image1" name="product_image1">
        </div>

        <div class="mb-3">
            <label for="product_image2 " class="form-label  text-white"> Image2 du produit</label>
            <input type="file" class="form-control" id="product_image2 " name="product_image2">
        </div>
        <div class="mb-3">
            <label for="product_image3 " class="form-label  text-white"> Image3 du produit</label>
            <input type="file" class="form-control" id="product_image3 " name="product_image3">
        </div>

        <div class="mb-3">
            <label for="product_price" class="form-label  text-white"> Prix du produit</label>
            <input type="text" class="form-control" id="product_price" placeholder="Ex:2000,00" name="product_price">
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

        </div>

    </form>
</div>


@endsection