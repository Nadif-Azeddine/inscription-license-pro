<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Licence;
use App\Models\Specialite;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departements = Departement::all();

        foreach ($departements as $departement) {
            $licences = [
                "Ingénierie des systèmes d'information et réseaux",
                "Mécatronique",
                "Métrologie, Qualité, Sécurité et environnement",
                "Gestion Comptable et Financière",
            ];

          
            $matchingSpecialite = Specialite::where('libelle', $departement->departement_nom)->first();

            foreach ($licences as $licence) {
                if ($matchingSpecialite) {
                    Licence::create([
                        'departement_id' => $departement->id,
                        'specialite_id' => $matchingSpecialite->id,
                        'nom_licence' => $licence,
                    ]);
                }
            }
        }
    }
}
