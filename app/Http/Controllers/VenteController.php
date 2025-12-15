<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Vendeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventes = Vente::with(['produit', 'vendeur', 'client'])->get();
        return view('ventes.index', compact('ventes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $produits = Produit::all();
        $vendeurs = Vendeur::all();
        return view('ventes.form', compact('clients', 'produits', 'vendeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vendeur_id' => 'required|exists:vendeurs,id',
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:produits,id'
        ]);
        $produits = Produit::findOrFail($request->product_id);
        $prix = $produits->product_price * $request->quantite;
        Vente::create([
            'vendeur_id' => $request->vendeur_id,
            'client_id' => $request->client_id,
            'product_id' => $request->product_id,
            'quantite' => $request->quantite,
            'prix_total' => $prix,
        ]);

        return redirect()->route('ventes.index')->with('success', 'Vente ajoutée avec succès !');
    }
    /**
     * Display the specified resource.
     */
    public function show(Vente $vente)
    {
        $vente->load('produit','vendeur','client');
        return view('ventes.detail',['vente'=>$vente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vente $vente)
    {
        $clients = Client::all();
        $produits = Produit::all();
        $vendeurs = Vendeur::all();
        return view('ventes.edit', compact('vente', 'clients', 'produits', 'vendeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vente $vente)
    {
        $request->validate([
            'vendeur_id' => 'required|exists:vendeurs,id',
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:produits,id'
        ]);
        $produits = Produit::findOrFail($request->product_id);
        $prix = $produits->product_price * $request->quantite;

        $vente->vendeur_id = $request->vendeur_id;
        $vente->product_id = $request->product_id;
        $vente->client_id = $request->client_id;
        $vente->quantite = $request->quantite;  
        $vente->prix_total = $prix;
$vente->save();

        return redirect()->route('ventes.index')->with('success', 'Vente ajoutée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        $vente->delete();
        return redirect(route('ventes.index'));
    }
}
