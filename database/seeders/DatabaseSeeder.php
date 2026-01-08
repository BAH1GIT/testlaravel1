<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Tet User',
            'email' => 'tet@example.com',
            'password'=> bcrypt('1234aqws'),
        ]);

        $this->call([
            SectionSeeder::class,
            CategorieSeeder::class, 
            VendeurSeeder::class,
            ClientSeeder::class,
            ProduitSeeder::class,
            VenteSeeder::class,

        ]);
    }
}
