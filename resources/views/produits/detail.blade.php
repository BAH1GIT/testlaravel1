@extends('layout.app')
@section('content')
<style>
    .card{
        width: 200px;
        height: 290px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .ca{
        width: 80px;
        height: 80px;
    }
</style>

<h1>Detail //produit </h1>

<div class="card">
    <img  src="{{ asset('storage/products/' . $produit->product_image1) }}" class="ca" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $produit->product_title }}</h5>
        <span class="card-text">{{ $produit->product_description }}</span>
        <span class="card-text">{{ $produit->product_keywords }}</span>
        <div class="d-flex gap-2 align-items-center">
        <span class="card-text">{{ $produit->categorie->libele}}</span>
        <span class="card-text">{{ $produit->section->title }}</span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <span class="card-text">{{ $produit->product_price }}</span>
            <div class="card__price"><a href="{{ route('produits.index') }}" class="btn mb-1 btn-outline-primary">Retour</a></div>
        </div>
    </div>
</div>


@endsection