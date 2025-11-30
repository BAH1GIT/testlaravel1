    <?php

    use App\Models\Client;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ClientController;
    use App\Http\Controllers\SectionController;
    use App\Http\Controllers\CategorieController;
    use App\Http\Controllers\ProduitController;
    use App\Http\Controllers\VendeurController;
use App\Http\Controllers\VenteController;

    Route::get('listCat', [CategorieController::class,'index'])->name('categories.index');
    Route::get('formCat', [CategorieController::class,'create'])->name('categories.create');
    Route::post('ajouCat', [CategorieController::class,'store'])->name('categories.store');
    Route::get('detailCat/{categorie}', [CategorieController::class,'show'])->name('categories.detail');
    Route::get('editCat/{categorie}', [CategorieController::class,'edit'])->name('categories.edit');
    Route::put('updateCat/{categorie}', [CategorieController::class,'update'])->name('categories.update');
    Route::delete('deleteCat/{categorie}', [CategorieController::class,'destroy'])->name('categories.delete');


    Route::get('listSec', [SectionController::class,'index'])->name('sections.index');
    Route::get('formSec', [SectionController::class,'create'])->name('sections.create');
    Route::post('ajouSec', [SectionController::class,'store'])->name('sections.store');
    Route::get('detailSec/{section}', [SectionController::class,'show'])->name('sections.detail');
    Route::get('editSec/{section}', [SectionController::class,'edit'])->name('sections.edit');
    Route::put('updateSec/{section}', [SectionController::class,'update'])->name('sections.update');
    Route::delete('deleteSec/{section}', [SectionController::class,'destroy'])->name('sections.delete');


    Route::get('listClient', [ClientController::class,'index'])->name('clients.index');
    Route::get('formClient', [ClientController::class,'create'])->name('clients.create');
    Route::post('ajouClient', [ClientController::class,'store'])->name('clients.store');
    Route::get('detailClient/{client}', [ClientController::class,'show'])->name('clients.detail');
    Route::get('editClient/{client}', [ClientController::class,'edit'])->name('clients.edit');
    Route::put('updateClient/{client}', [ClientController::class,'update'])->name('clients.update');
    Route::delete('deleteClient/{client}', [ClientController::class,'destroy'])->name('clients.delete');



    Route::get('listVend', [VendeurController::class,'index'])->name('vendeurs.index');
    Route::get('formVend', [VendeurController::class,'create'])->name('vendeurs.create');
    Route::post('ajouVend', [VendeurController::class,'store'])->name('vendeurs.store');
    Route::get('detailVend/{vendeur}', [VendeurController::class,'show'])->name('vendeurs.detail');
    Route::get('editVend/{vendeur}', [VendeurController::class,'edit'])->name('vendeurs.edit');
    Route::put('updateVend/{vendeur}', [VendeurController::class,'update'])->name('vendeurs.update');
    Route::delete('deleteVend/{vendeur}', [VendeurController::class,'destroy'])->name('vendeurs.delete');




    Route::get('listProduct', [ProduitController::class,'index'])->name('produits.index');
    Route::get('/', [ProduitController::class,'create'])->name('produits.create');
    Route::post('ajouProduct', [ProduitController::class,'store'])->name('produits.store');
    Route::get('detailProduct/{produit}', [ProduitController::class,'show'])->name('produits.detail');
    Route::get('editProduct/{produit}', [ProduitController::class,'edit'])->name('produits.edit');
    Route::put('updateProduct/{produit}', [ProduitController::class,'update'])->name('produits.update');
    Route::delete('deleteProduct/{produit}', [ProduitController::class,'destroy'])->name('produits.delete');


     Route::get('fzfd', [VenteController::class,'index'])->name('ventes.index');
    Route::get('formVente', [VenteController::class,'create'])->name('ventes.create');
    Route::post('ajouVente', [VenteController::class,'store'])->name('ventes.store');
    Route::get('detailVente/{vente}', [VenteController::class,'show'])->name('ventes.detail');
    Route::get('editVente/{vente}', [VenteController::class,'edit'])->name('ventes.edit');
    Route::put('updateVente/{vente}', [VenteController::class,'update'])->name('ventes.update');
    Route::delete('deleteVente/{vente}', [VenteController::class,'destroy'])->name('ventes.delete');
