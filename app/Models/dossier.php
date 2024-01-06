<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $table = 'dossier';
    protected $fillable = [
        'candidature_id',
        
       
      
    ];
    public function dossier_nu(){
        return $this->hasOne(DossierNu::class);
    }
    public function dossierpy(){
        return $this->hasOne(DossierPy::class);
    }
    public function candidature(){
        return $this->belongsTo(Candidature::class);
    }
}
