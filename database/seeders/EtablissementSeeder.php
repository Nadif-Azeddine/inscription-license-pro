<?php

namespace Database\Seeders;

use App\Models\Etablissement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = [
            'Ecole Nationale de Commerce et de Gestion (ENCG) - Safi',
            'Institut National des Postes et Télécommunications (INPT)',
            'Ecole Marocaine des Sciences de l\'Ingénieur (EMSI)',
            'Institut des Hautes Etudes de Management (HEM)',
            'Ecole Nationale des Sciences Appliquées (ENSA) - Present in different cities',
            'Institut des Hautes Etudes de Management et d\'Informatique (IGA)',
            'Ecole Supérieure des Industries du Textile et de l\'Habillement (ESITH)',
            'Ecole Supérieure de Technologie (EST) - Safi',
            'Ecole Supérieure de Technologie (EST) - Agadir',
            'Ecole Supérieure de Technologie (EST) - Al Hoceima',
            'Ecole Supérieure de Technologie (EST) - Berrechid',
            'Ecole Supérieure de Technologie (EST) - Casablanca',
            'Université Mohammed V de Rabat (UM5)',
            'Université Hassan II de Casablanca (UH2C)',
            'Université Cadi Ayyad (UCA)',
            'Université Ibn Tofail (UIT)',
            'Université Sidi Mohamed Ben Abdellah (USMBA)',
            'Université Ibn Zohr (UIZ)',
            'Université Moulay Ismail (UMI)',
            'Université Abdelmalek Essaâdi (UAE)',
            'Université Hassan Premier de Settat (UH1)',
            'Université Chouaib Doukkali (UCD)',
            'Institut Spécialisé de Technologie Appliquée - Safi',
            'Institut Spécialisé de Technologie Appliquée - Rabat',
            'Institut Spécialisé de Technologie Appliquée - Tanger',
            'Institut Spécialisé de Technologie Appliquée - Tétouan',
            'NTIC (Nouvelles Technologies de l\'Information et de la Communication) - Safi',
            'NTIC (Nouvelles Technologies de l\'Information et de la Communication) - Rabat',
            'NTIC (Nouvelles Technologies de l\'Information et de la Communication) - Tanger',
            'NTIC (Nouvelles Technologies de l\'Information et de la Communication) - Tétouan',
        ];

        foreach ($institutions as $institution) {
            Etablissement::create([
                'nom_etablissement' => $institution,
                'ville_id' => 1,
            ]);
        }
    }
}
