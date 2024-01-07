<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissement';
    protected $fillable = [
        'ville_id',
        'nom_etablissement',
       
      
    ];
    public function candidats(){
        return $this->hasMany(Candidat::class, 'etablissement_id');
    }
    public function departements(){
        return $this->hasMany(Departement::class);
    }
    public function diplomes(){
        return $this->belongsToMany(Diplome::class);
    }
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
}
