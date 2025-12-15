<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $titles = [
            'Nouveautés',
            'Promotions',
            'Meilleures ventes',
            'Produits populaires',
            'Produits recommandés',
            'Produits en stock',
            'Produits en rupture',
            'Produits locaux',
            'Produits importés',
            'Offres spéciales',
        ];

        foreach ($titles as $title) {
            Section::create([
                'title' => $title,
            ]);
        }
    }
}
