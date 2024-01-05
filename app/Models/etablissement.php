<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissement';
    protected $fillable = [
        'etablissement_id',
        'ville_id',
        'nom_etablissement',
       
      
    ];
    public function Candidat(){
        return $this->belongsToMany(Candidat::class);
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
