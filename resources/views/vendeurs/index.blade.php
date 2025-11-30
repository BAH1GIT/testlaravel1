@extends('layout.app')
@section('content')

<style>
    .imaq {
        width: 80px;
        height: 80px;
        object-fit: contain;
    }

    .table-responsive {
        max-width: 100%;
        overflow-x: auto;
    }

    table.table td,
    table.table th {
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        max-width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<div class="container mt-3">
    <h3 class="text-center mb-3">Liste des ventes</h3>

    <a href="{{ route('ventes.create') }}" class="btn btn-primary mb-3">Nouvelle vente</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Vendeur</th>
                    <th>Produit</th>
                    <th>Image</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($ventes as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->client->nom }}</td>
                    <td>{{ $v->vendeur->nom }}</td>
                    <td>{{ $v->produit->product_title }}</td>

                    {{-- Image du produit --}}
                    <td class="text-center">
                        @if($v->produit && $v->produit->product_image1)
                        <img src="{{ asset('storage/' . $v->produit->product_image1) }}" alt="img" class="imaq">
                        @else
                        <span class="text-muted small">Pas d'image</span>
                        @endif
                    </td>

                    <td>{{ $v->quantite }}</td>
                    <td>{{ number_format($v->total_price, 2, ',', ' ') }} F CFA</td>

                    <td>
                        <a href="{{ route('ventes.show', $v->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('ventes.edit', $v->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                        <form action="{{ route('ventes.destroy', $v->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cette vente ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection