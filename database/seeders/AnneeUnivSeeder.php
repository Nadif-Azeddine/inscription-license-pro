<?php

namespace Database\Seeders;

use App\Models\AnneUn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnneeUnivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annees = [
            '2020-2021',
            '2021-2022',
            '2022-2023',
            '2023-2024',
            '2024-2025',
        ];

        foreach ($annees as $annee) {
            AnneUn::create(['anneeun' => $annee]);
        }
    }
}
