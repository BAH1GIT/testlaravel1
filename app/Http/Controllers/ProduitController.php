<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Section;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    /**
     * Display a listing of the resource.
     */
    public function produitParCategorie($categorie_id)
    {
        $produits = Produit::where('categorie_id', $categorie_id)->get();
        return view('produits.index', compact('produits'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $sections   = Section::all();

        return view('produits.form', compact('categories', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    // 1️⃣ Validation
    $request->validate([
        'product_title'   => 'required|string',
        'product_price'   => 'required|numeric',
        'categorie_id'    => 'required',
        'section_id'      => 'required',
        'product_image1'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
        'product_image2'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
        'product_image3'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
    ]);

    // 2️⃣ Créer un nouveau produit
    $produit = new Produit();
    $produit->product_title       = $request->product_title;
    $produit->product_description = $request->product_description;
    $produit->product_keywords    = $request->product_keywords;
    $produit->categorie_id        = $request->categorie_id;
    $produit->section_id          = $request->section_id;
    $produit->product_price       = $request->product_price;

    // 3️⃣ Gestion image 1
    if ($request->hasFile('product_image1')) {
        $produit->product_image1 = $request->file('product_image1')->store('products', 'public');
    }

    // 4️⃣ Gestion image 2
    if ($request->hasFile('product_image2')) {
        $produit->product_image2 = $request->file('product_image2')->store('products', 'public');
    }

    // 5️⃣ Gestion image 3
    if ($request->hasFile('product_image3')) {
        $produit->product_image3 = $request->file('product_image3')->store('products', 'public');
    }

    // 6️⃣ Enregistrer le produit
    $produit->save();

    return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès');
}




    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('produits.detail', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        $categories = Categorie::all();
        $sections   = Section::all();
        return view('produits.edit', compact('produit', 'categories', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, Produit $produit)
{
    // 1️⃣ Validation
    $request->validate([
        'product_title'   => 'required|string',
        'product_price'   => 'required|numeric',
        'categorie_id'    => 'required',
        'section_id'      => 'required',
        'product_image1'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
        'product_image2'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
        'product_image3'  => 'nullable|image|mimes:jpg,jpeg,png,gif',
    ]);

    // 2️⃣ Mettre à jour les champs texte
    $produit->product_title       = $request->product_title;
    $produit->product_description = $request->product_description;
    $produit->product_keywords    = $request->product_keywords;
    $produit->categorie_id        = $request->categorie_id;
    $produit->section_id          = $request->section_id;
    $produit->product_price       = $request->product_price;

    // 3️⃣ Gestion image 1
    if ($request->hasFile('product_image1')) {
        // Supprimer l'ancienne si elle existe
        if ($produit->product_image1 && Storage::disk('public')->exists($produit->product_image1)) {
            Storage::disk('public')->delete($produit->product_image1);
        }
        // Stocker la nouvelle
        $produit->product_image1 = $request->file('product_image1')->store('products', 'public');
    }

    // 4️⃣ Gestion image 2
    if ($request->hasFile('product_image2')) {
        if ($produit->product_image2 && Storage::disk('public')->exists($produit->product_image2)) {
            Storage::disk('public')->delete($produit->product_image2);
        }
        $produit->product_image2 = $request->file('product_image2')->store('products', 'public');
    }

    // 5️⃣ Gestion image 3
    if ($request->hasFile('product_image3')) {
        if ($produit->product_image3 && Storage::disk('public')->exists($produit->product_image3)) {
            Storage::disk('public')->delete($produit->product_image3);
        }
        $produit->product_image3 = $request->file('product_image3')->store('products', 'public');
    }

    // 6️⃣ Enregistrer le produit
    $produit->save();

    return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index');
    }
}
