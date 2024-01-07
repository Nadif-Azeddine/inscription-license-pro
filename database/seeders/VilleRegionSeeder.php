<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Ville;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VilleRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $jsonContent = file_get_contents(public_path('regions/region.json'));
        $regions = json_decode($jsonContent, true);

        $jsonContentvilles = file_get_contents(public_path('regions/ville.json'));
        $villes = json_decode($jsonContentvilles, true);

        foreach ($regions as $region) {
            Region::create([
                'nom_region' => $region['region'],
            ]);
        }

        foreach ($villes as $ville) {
            Ville::create([
                'nom_ville' => $ville['ville'],
                'region_id' => $ville['region'],
            ]);
        }
    }
}