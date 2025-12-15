@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="col">
        <h3 class="text-center text-secondary bg-white rounded-3 p-1">Page Ajout Vente</h3>
    </div>
    <form class="bg-info p-3 rounded-3 " method="post" action="{{ route('ventes.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- selection du Client, vendeur et du produit -->
        <div class="row">
            <div class="col-4">
                <div class="mb-1">
                    <label class="form-label text-white">Vendeur</label>
                    <select name="vendeur_id" class="form-select">
                        <option value="">Sélectionner un Vendeur</option>
                        @foreach ($vendeurs as $v)
                        <option value="{{ $v->id }}">{{ $v->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-1">
                    <label class="form-label text-white">Client</label>
                    <select name="client_id" class="form-select">
                        <option value="">Sélectionner un Client</option>
                        @foreach ($clients as $c)
                        <option value="{{ $c->id }}">{{ $c->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label class="form-label text-white">Produit</label>
                <select name="product_id" id="produit_select" class="form-select">
                    <option value="">Sélectionner un Produit</option>
                    @foreach ($produits as $p)
                    <option value="{{ $p->id }}"
                        data-title="{{ $p->product_title }}"
                        data-price="{{ $p->product_price }}"
                        data-image="{{ $p->product_image1 }}">{{ $p->product_title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- afffichage du detail du produit et inserer quantite  -->
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
                    <input name="quantite" type="number" id="quantite" min="1" value="1" class="form-control">
                </div>
            </div>
        </div>
        <!-- bouton ajout vente et retour vers index vente -->
        <div class="row">
            <div class="col-6">
                <a href="{{ route('ventes.index') }}" class="btn btn-secondary w-100">Retour</a>
            </div>
            <div class="col-6 ">
                <input type="submit" class="btn btn-primary w-100" value="Ajouter Vente">
            </div>
        </div>

    </form>
</div>
<script>
    const produitSelect = document.getElementById('produit_select')
    const productTitle = document.getElementById('product_title')
    const productPrice = document.getElementById('product_price')
    const Quantite = document.getElementById('quantite')
    const productImage1 = document.getElementById('product_image1')
    produitSelect.addEventListener('change', function() {
        let option = this.options[this.selectedIndex];

        productTitle.value = option.dataset.title || "";
        productPrice.value = option.dataset.price || "";
        Quantite.value = option.dataset.quantite || "";

        let image = option.dataset.image;
        productImage1.src = image ? `/storage/${image}` : "";
    });
</script>



@endsection