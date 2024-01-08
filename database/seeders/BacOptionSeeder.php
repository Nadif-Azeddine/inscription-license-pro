<?php

namespace Database\Seeders;

use App\Models\BacOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BacOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            'BAC SCIENCES AGRONOMIQUES',
            'BAC SCIENCES ÉCONOMIQUES',
            'BAC TECHNIQUES DE GESTION ET COMPTABILITÉ',
            'SVT BAC',
            'BAC SCIENCES MATHÉMATIQUES A',
            'BAC SCIENCES MATHÉMATIQUES B',
            'BAC SCIENCES PHYSIQUES',
            'BAC SCIENCES ET TECHNOLOGIES ÉLECTRIQUES',
            'BAC SCIENCES ET TECHNOLOGIES MÉCANIQUES',
        ];

        foreach ($options as $option) {
            BacOption::create(['option' => $option]);
        }
    }
}
