<?php

use App\Models\BacOption;
use Illuminate\Database\Seeder;
use App\Models\Option; // Make sure to adjust the namespace if needed

class OptionSeeder extends Seeder
{
    public function run()
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
