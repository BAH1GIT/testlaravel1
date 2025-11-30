<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories=Categorie::all();
       return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('categories.form');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = new Categorie;
        $categories->id=$request->id;
        $categories->libele=$request->libele;
        $categories->description=$request->description;
        $categories->save();
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     */
     public function show(Categorie $categorie)
    {
        return view('categories.detail', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $categorie->libele = $request->libele;
        $categorie->description = $request->description;
        $categorie->save();
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
