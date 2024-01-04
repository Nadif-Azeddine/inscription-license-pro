<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        'dossier_id',
        'candidature_id',
        
       
      
    ];
    public function dossier_nu(){
        return $this->hasOne(dossier_nu::class);
    }
    public function dossierpy(){
        return $this->hasOne(dossierpy::class);
    }
    public function candidature(){
        return $this->belongsTo(candidature::class);
    }
}
