<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierPy extends Model
{
    use HasFactory;
    protected $table = 'dossierpy';
    protected $fillable = [
        'dossierpy_id',
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
