<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierNu extends Model
{
    use HasFactory;
    protected $table = 'dossier_nu';
    protected $fillable = [
        'dossier_id',
        'CIN',
        'Bac',
        'diplome',
        'relevé_ann1',
        'relevé_ann2',  
    ];

    public function dossier(){
        return $this->belongsTo(dossier::class);
    }
}
