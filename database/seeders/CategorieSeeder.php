<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $categories = [
            [
                'libele' => 'Électronique',
                'description' => 'Téléphones, ordinateurs, télévisions et accessoires électroniques',
            ],
            [
                'libele' => 'Mode & Vêtements',
                'description' => 'Vêtements homme, femme, chaussures et accessoires',
            ],
            [
                'libele' => 'Maison & Électroménager',
                'description' => 'Appareils électroménagers et équipements pour la maison',
            ],
            [
                'libele' => 'Alimentation',
                'description' => 'Produits alimentaires, boissons et produits locaux',
            ],
            [
                'libele' => 'Beauté & Santé',
                'description' => 'Produits cosmétiques, soins corporels et hygiène',
            ],
            [
                'libele' => 'Bricolage',
                'description' => 'Outils, matériaux et équipements de construction',
            ],
            [
                'libele' => 'Sports & Loisirs',
                'description' => 'Articles de sport, fitness et loisirs',
            ],
            [
                'libele' => 'Fournitures de bureau',
                'description' => 'Papeterie, fournitures scolaires et de bureau',
            ],
            [
                'libele' => 'Téléphonie',
                'description' => 'Smartphones, cartes SIM et accessoires téléphoniques',
            ],
            [
                'libele' => 'Informatique',
                'description' => 'PC, logiciels, périphériques et accessoires informatiques',
            ],
        ];

        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
}

    

