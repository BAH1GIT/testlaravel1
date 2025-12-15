@extends('layout.app')
@section('content')

<div class="container mt-3">
    <h3>Détails de la vente #{{ $vente->id }}</h3>

    <div class="card p-3">
        <div class="row">
            <div class="col-md-4 text-center">
                @if($vente->produit && $vente->produit->product_image1)
                    <img src="{{ asset('storage/' . $vente->produit->product_image1) }}" alt="image" style="max-width:100%; height:250px; object-fit:contain;">
                @else
                    <div class="border p-5 text-muted">Pas d'image</div>
                @endif
            </div>

            <div class="col-md-8">
                <h4 class="text-info">Titre :{{ $vente->produit->product_title }}</h4>
                <p><strong>Client :</strong> {{ $vente->client->nom }}</p>
                <p><strong>Vendeur :</strong> {{ $vente->vendeur->nom }}</p>
                <p><strong>Prix Produit :</strong> {{ $vente->produit->product_price }}</p>
                <p><strong>Quantité :</strong> {{ $vente->quantite }}</p>
                <p><strong>Total :</strong> {{ number_format($vente->prix_total, 2, ',', ' ') }} F CFA</p>
                <p><strong>Description :</strong> {{ $vente->produit->product_description }}</p>

                <a href="{{ route('ventes.index') }}" class="btn btn-secondary">Retour</a>
                <a href="{{ route('ventes.edit', $vente->id) }}" class="btn btn-warning">Modifier</a>
            </div>
        </div>
    </div>
</div>

@endsection
