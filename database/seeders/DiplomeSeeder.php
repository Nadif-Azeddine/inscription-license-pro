<?php

namespace Database\Seeders;

use App\Models\Diplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diplomas = [
            "Diplôme Universitaire de Technologie (DUT)",
            "Diplôme des Études Universitaires Générales (DEUG)",
            "Diplômes de Technicien Spécialisé (DTS)",
            "Brevet de Technicien (BT)",
            "Certificat des Études Supérieures (CES)"
        ];

        foreach ($diplomas as $diploma) {
            Diplome::create(['nom_diplome' => $diploma]);
        }
    }
}
