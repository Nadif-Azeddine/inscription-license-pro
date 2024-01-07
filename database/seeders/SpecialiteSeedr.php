<?php

namespace Database\Seeders;

use App\Models\Specialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialiteSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specs = [
            'Mécatronique',
            'Métrologie, qualité, sécurité et environnement',
            'Ingénierie de systèmes d\'information et réseaux',
            'Gestion comptable et financière'
        ];

        foreach ($specs as $spec) {
            Specialite::create(['libelle' => $spec]);
        }
    }
}
