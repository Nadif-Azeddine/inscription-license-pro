<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissement';
    protected $fillable = [
        'etablissement_id',
        'ville_id',
        'nom_etablissement',
       
      
    ];
    public function candidat(){
        return $this->hasMany(Candidat::class);
    }
    public function departement(){
        return $this->hasMany(departement::class);
    }
    public function diplome(){
        return $this->hasMany(diplome::class);
    }
    public function ville(){
        return $this->belongsTo(ville::class);
    }
}
