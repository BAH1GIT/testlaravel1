@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="col">
        <h3 class="text-center text-secondary bg-white rounded-3 p-1">Page editer Vente</h3>
    </div>
    <form class="bg-info p-3 rounded-3 " method="post" action="{{ route('ventes.update',$vente->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-4">
                <div class="mb-1">
                    <label class="form-label text-white">Vendeur</label>
                    <select name="vendeur_id" class="form-select">
                        @foreach ($vendeurs as $v)
                        <option value="{{ $v->id }}" {{ $vente->vendeur_id==$v->id ? 'selected' : '' }}>
                            {{ $v->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-1">
                    <label class="form-label text-white">Client</label>
                    <select name="client_id" class="form-select">
                        @foreach ($clients as $c)
                        <option value="{{ $c->id }}" {{ $vente->client_id==$c->id ? 'selected' : '' }}>
                            {{ $c->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label class="form-label text-white">Produit</label>
                <select name="product_id" id="produit_select" class="form-select">
                    @foreach ($produits as $p)
                    <option value="{{ $p->id }}"
                        data-title="{{ $p->product_title }}"
                        data-price="{{ $p->product_price }}"
                        data-image="{{ $p->product_image1 }}" 
                        {{ $vente->product_id==$p->id ? 'selected' : '' }}>
                        {{ $p->product_title }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-4">
                <div class="mb-1">
                    <label for="product_title" class="form-label text-white">Titre</label>
                    <input type="text" id="product_title" class="form-control" readonly>
                </div>

                <div class="mb-1">
                    <label for="product_price" class="form-label text-white">Prix</label>
                    <input type="text" id="product_price" class="form-control" readonly>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-1">
                    <label for="product_image1" class="form-label text-white">Image</label><br>
                    <div class="bg-light border rounded d-flex justify-content-center align-items-center"
                        id="product_image_container"
                        style="width:100%; height:110px;">
                        <img id="product_image1" src="" style="max-width:100%; max-height:100%; display:block;">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-1">
                    <label for="quantite" class="form-label text-white">Quantite</label>
                    <input name="quantite" type="number" id="quantite" min="1" value="{{ $vente->quantite }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ">
                <input type="submit" class="btn btn-primary w-100" value="Modifier produit">
            </div>
            <div class="col-6">
                <a href="{{ route('ventes.index') }}" class="btn btn-secondary w-100">Retour</a>
            </div>
        </div>

    </form>
</div>

<script>
    function chargerInfosProduit() {
        let select = document.getElementById('produit_select');
        let option = select.options[select.selectedIndex];

        document.getElementById('product_title').value = option.dataset.title || "";
        document.getElementById('product_price').value = option.dataset.price || "";

        let image = option.dataset.image;
        document.getElementById('product_image1').src = image ? `/storage/${image}` : "";
    }

    document.getElementById('produit_select').addEventListener('change', chargerInfosProduit);

    window.onload = chargerInfosProduit;
</script>



@endsection