<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendeur;

class VendeurSeeder extends Seeder
{
    public function run(): void
    {
        $vendeurs = [
            [
                'nom' => 'Abdoulaye Ndiaye',
                'poste' => 'Responsable des ventes',
            ],
            [
                'nom' => 'Seynabou Diop',
                'poste' => 'Commercial',
            ],
            [
                'nom' => 'Mamadou Fall',
                'poste' => 'Conseiller clientèle',
            ],
            [
                'nom' => 'Fatou Bâ',
                'poste' => 'Chef de rayon',
            ],
            [
                'nom' => 'Cheikh Sarr',
                'poste' => 'Agent de vente',
            ],
        ];

        foreach ($vendeurs as $vendeur) {
            Vendeur::create($vendeur);
        }
    }
}
