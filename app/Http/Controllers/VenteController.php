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
        return view('ventes.form',compact('clients','produits','vendeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vendeur_id'=>'required|exists:vendeurs,id',
            'client_id'=>'required|exists:clients,id',
            'produit_id'=>'required|exists:produits,id'
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vente $vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vente $vente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        //
    }
}
