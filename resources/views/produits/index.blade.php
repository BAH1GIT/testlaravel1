@extends('layout.app')
@section('content')

<div id="product-carousel" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($produits as $produit)
            <li class="splide__slide">
                <div class="card mb-5 " style="width: 200px;">
                    <img src="{{ asset('storage/' . $produit->product_image1) }}" class="card-img-top" alt="{{ $produit->product_title }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ Str::limit($produit->product_title, 20) }}</h5>
                        <p class="card-text">{{ number_format($produit->product_price, 2) }} €</p>
                        <a href="{{ route('produits.detail', $produit->id) }}" class="btn btn-primary btn-sm">Voir</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    <a href="{{ route('produits.create') }}" class="btn btn-primary">Ajout produit</a>
</div>
@endsection
