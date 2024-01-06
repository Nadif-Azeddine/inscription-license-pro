<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    protected $table = 'ville';
    protected $fillable = [
        'ville_id',
        'region_id',
        'nom_ville',
    
      
    ];
    public function Candidats(){
        return $this->hasMany(Candidat::class, 'ville_id');
    }
    public function etablissements(){
        return $this->hasMany(Etablissement::class);
    }
    public function region(){
        return $this->belongsTo(Region::class);
    }
}
