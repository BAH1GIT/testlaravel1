<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Section;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Categorie::all();
        $sections = Section::all();

        $produits = [];

        for ($i = 1; $i <= 50; $i++) {
            $categorie = $categories->random();
            $section = $sections->random();

            $produits[] = [
                'product_title' => $categorie->libele . " Produit $i",
                'product_description' => "Description détaillée pour le produit $i de la catégorie " . $categorie->libele,
                'product_keywords' => strtolower($categorie->libele) . ", produit, vente",
                'categorie_id' => $categorie->id,
                'section_id' => $section->id,
                'product_image1' => "images/produit_$i.jpg",
                'product_image2' => null,
                'product_image3' => null,
                'product_price' => rand(1000, 100000), // prix aléatoire
                'product_status' => ['dispo', 'faible', 'en rupture'][rand(0,2)],
            ];
        }

        foreach ($produits as $prod) {
            Produit::create($prod);
        }
    }
}
