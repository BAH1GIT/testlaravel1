<?php

namespace App\Http\Controllers;

use App\Models\Vendeur;
use Illuminate\Http\Request;

class VendeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendeurs = vendeur::all();
        return view('vendeurs.index', compact('vendeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendeurs.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vendeurs = new Vendeur;
        $vendeurs->id = $request->id;
        $vendeurs->nom = $request->nom;
        $vendeurs->poste = $request->poste;
        $vendeurs->save();
        return redirect()->route('vendeurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendeur $vendeur)
    {
        return view('vendeurs.detail', compact('vendeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendeur $vendeur)
    {
        return view('vendeurs.edit', compact('vendeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendeur $vendeur)
    {
        $vendeur->nom = $request->nom;
        $vendeur->poste = $request->poste;
        $vendeur->save();
        return redirect(route('vendeurs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendeur $vendeur)
    {
        $vendeur->delete();
        return redirect(route('vendeurs.index'));
    }
}
