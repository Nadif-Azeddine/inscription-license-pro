<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $table = 'ville';
    protected $fillable = [
        'nom_ville',
        'region_id',
    
      
    ];
    public function Candidats(){
        return $this->hasMany(Candidat::class, 'ville_id');
    }
    public function etablissements(){
        return $this->hasMany(Etablissement::class, 'ville_id');
    }
    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }
}
