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

        if ($categories->isEmpty() || $sections->isEmpty()) {
            $this->command->error("Il faut d'abord seed les catégories et sections !");
            return;
        }

        // Crée le dossier storage/products s'il n'existe pas
        $storagePath = storage_path('products');
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0755, true);
        }

        for ($i = 1; $i <= 50; $i++) {
            $categorie = $categories->random();
            $section = $sections->random();

            // Chemin complet pour stocker l'image
            $imageFullPath = $storagePath . "/produit_$i.jpg";

            // Télécharger une image de test
            file_put_contents($imageFullPath, file_get_contents("https://picsum.photos/400/400?random=$i"));

            // Chemin relatif pour la base et Blade
            $relativePath = "products/produit_$i.jpg";

            Produit::create([
                'product_title' => $categorie->libele . " Produit $i",
                'product_description' => "Description détaillée pour le produit $i de la catégorie " . $categorie->libele,
                'product_keywords' => strtolower($categorie->libele) . ", produit, vente",
                'categorie_id' => $categorie->id,
                'section_id' => $section->id,
                'product_image1' => $relativePath,
                'product_image2' => null,
                'product_image3' => null,
                'product_price' => rand(1000, 100000),
                'product_status' => ['dispo', 'faible', 'en rupture'][rand(0,2)],
            ]);
        }
    }
}
