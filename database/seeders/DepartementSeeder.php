<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departement;
use App\Models\Etablissement;
class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you have four establishments
        $etablissements = Etablissement::all();

        $Departements = [
            "Génie Informatique",
            "Maintenance Industrielle",
            "Techniques d'Analyses et Contrôle Qualité",
            "Techniques de Management",
        ];

        foreach ($etablissements as $etablissement) {
            foreach ($Departements as $departement) {
                Departement::create([
                    'etablissement_id' => $etablissement->id,
                    'departement_nom' => $departement,
                ]);
            }
        }
    }
}
