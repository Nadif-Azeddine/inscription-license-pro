<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dossier_nu extends Model
{
    use HasFactory;
    protected $fillable = [
        'dossier_nu_id',
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
