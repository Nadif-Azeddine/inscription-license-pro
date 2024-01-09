<?php

namespace Database\Seeders;

use App\Models\Specialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specs = [
            'Génie Industriel et Maintenance',
            'Techniques Instrumentales et Management de Qualité',
            'Génie Informatique',
            'Techniques de Management'
        ];

        foreach ($specs as $spec) {
            Specialite::create(['libelle' => $spec]);
        }
    }
}
