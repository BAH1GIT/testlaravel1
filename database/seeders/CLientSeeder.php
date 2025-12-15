<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'nom' => 'Marie Ndiaye',
                'email' => 'marie.ndiaye@example.com',
                'telephone' => '+221770000001',
            ],
            [
                'nom' => 'Mamadou Fall',
                'email' => 'mamadou.fall@example.com',
                'telephone' => '+221770000002',
            ],
            [
                'nom' => 'Fatou Diop',
                'email' => 'fatou.diop@example.com',
                'telephone' => '+221770000003',
            ],
            [
                'nom' => 'Cheikh Sarr',
                'email' => 'cheikh.sarr@example.com',
                'telephone' => '+221770000004',
            ],
            [
                'nom' => 'Aissatou Ba',
                'email' => 'aissatou.ba@example.com',
                'telephone' => '+221770000005',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
