<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;
    protected $table = 'license';
    protected $fillable = [
        'departement_id',
        'nom_licence',
        'specialite_id',
        'order',
    
    ];
    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }
    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id');
    }
    public function Specialite(){
        return $this->belongsTo(Specialite::class,'specialite_id');
    }
    
}
