@extends('layout.app')
@section('content')
<style>
  

    .ca {
        width: 80px;
        height: 80px;
    }
</style>

<div class="container mt-3">
    <h3>Détails du Produit #{{ $produit->id }}</h3>

    <div class="card p-3">
        <div class="row">
            <div class="col-md-4 text-center">
                @if($produit->product_image1)
                <img src="{{ asset('storage/' . $produit->product_image1) }}" alt="image" style="max-width:100%; height:250px; object-fit:contain;">
                @else
                <div class="border p-5 text-muted">Pas d'image</div>
                @endif
            </div>

            <div class="col-md-8">
                <h5 class="card-title"> Titre :{{ $produit->product_title }}</h5>
                <p class="card-text"><strong>Description :</strong>{{ $produit->product_description }}</p>
                <p class="card-text"><strong>Categorie :</strong>{{ $produit->categorie->libele}}</p>
                <p class="card-text"><strong>section :</strong>{{ $produit->section->title }}</p>
                <p class="card-text"><strong>Prix du produit :</strong>{{ $produit->product_price }}</p>


                <div class="d-flex gap-2 align-items-center">
                    <div class="card__price"><a href="{{ route('produits.index') }}" class="btn mb-1 btn-outline-primary">Retour</a></div>
                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-outline-warning">Modifier</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection