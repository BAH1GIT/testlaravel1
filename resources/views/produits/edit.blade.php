@extends('layout.app')
@section('content')

<div class="col-md-8 mx-auto">
    <h1 class=" p-2 ">Edit Produit</h1>
    <form class="bg-info p-3 rounded-3 m-3" action="{{ route('produits.update',$produit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="product_title" class="form-label  text-white">Titre du produit</label>
            <input type="text" class="form-control" id="product_title" placeholder="Ex:mangue" name="product_title" value="{{$produit->product_title}}">
        </div>
        <div class="mb-3">
            <label for="product_description" class="form-label  text-white">Description du produit</label>
            <input type="text" class="form-control" id="product_description" placeholder="La description du produit" name="product_description" value="{{$produit->product_description}}">
        </div>
        <div class="mb-3">
            <label for="product_keywords" class="form-label  text-white"> Mots clé du produit</label>
            <input type="text" class="form-control" id="product_keywords" placeholder="Les mots clé du produit" name="product_keywords" value="{{$produit->product_keywords}}">
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Catégorie</label>
            <select name="categorie_id" class="form-select">
                <option value="">Sélectionner une catégorie</option>
                @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}"
                    {{ $produit->categorie_id == $categorie->id ? 'selected' : '' }}>
                    {{ $categorie->libele }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="selectSection" class="form-label text-white">Section</label>
            <select name="section_id" id="selectSection" class="form-select">
                <option value="">Selectionner une section</option>
                @foreach ($sections as $section)
                <option value="{{ $section->id }}"
                    {{ $produit->section_id == $section->id ? 'selected' : '' }}>
                    {{ $section->title }}
                </option>
                @endforeach
            </select>
        </div>
         <div class="mb-3">
            <label for="product_image1" class="form-label text-white">Image1 du produit</label>
            <input type="file" class="form-control" id="product_image1" name="product_image1">

            @if ($produit->product_image1)
            <div class="mt-2">
                <p>Image actuelle :</p>
                <img src="{{ asset('storage/' . $produit->product_image1) }}" alt="{{ $produit->produit_title }}" style="max-width:90px;">
            </div>
            @endif
        </div>


        <div class="mb-3">
            <label for="product_image2" class="form-label text-white">Image2 du produit</label>
            <input type="file" class="form-control" id="product_image2" name="product_image2">
            @if ($produit->product_image2)
            <div class="mt-2">
                <p>Image2 actuelle :</p>
                <img src="{{ asset('storage/products/' . $produit->product_image2) }}" alt="{{ $produit->produit_title }}" style="max-width:90px;">
            </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="product_image3" class="form-label text-white">Image3 du produit</label>
            <input type="file" class="form-control" id="product_image3" name="product_image3">

            @if ($produit->product_image3)
            <div class="mt-2">
                <p>Image actuelle :</p>
                <img src="{{ asset('storage/products/' . $produit->product_image3) }}" alt="{{ $produit->produit_title }}" style="max-width:90px;">
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="product_price" class="form-label  text-white"> Prix du produit</label>
            <input type="text" class="form-control" id="product_price" placeholder="Ex:2000,00" name="product_price" value="{{$produit->product_price}}">
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-outline-primary text-white fs-4">Ajouter</button>

        </div>

    </form>
</div>


@endsection