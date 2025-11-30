<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clients = new Client;
        $clients->nom = $request->nom;
        $clients->email = $request->email;
        $clients->telephone = $request->telephone;
        $clients->save();
        return redirect(route('clients.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.detail', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->nom = $request->nom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->save();
        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client-> delete();
        return redirect()->route('clients.index');
    }
}
