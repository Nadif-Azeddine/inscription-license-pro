<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville_id',
        'region_id',
        'nom_ville',
    
      
    ];
    public function Candidat(){
        return $this->belongsToMany(Candidat::class);
    }
    public function etablissement(){
        return $this->hasMany(etablissement::class);
    }
    public function region(){
        return $this->belongsTo(region::class);
    }
}
