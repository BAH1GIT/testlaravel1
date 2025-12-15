<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vente;
use App\Models\Produit;
use App\Models\Vendeur;
use App\Models\Client;

class VenteSeeder extends Seeder
{
    public function run(): void
    {
        $produits = Produit::all();
        $vendeurs = Vendeur::all();
        $clients = Client::all();

        for ($i = 1; $i <= 50; $i++) {
            $produit = $produits->random();
            $vendeur = $vendeurs->random();
            $client = $clients->random();
            $quantite = rand(1, 5); // 1 à 5 produits achetés
            $prix_total = $produit->product_price * $quantite;

            Vente::create([
                'product_id' => $produit->id,
                'vendeur_id' => $vendeur->id,
                'client_id' => $client->id,
                'quantite' => $quantite,
                'prix_total' => $prix_total,
            ]);
        }
    }
}
