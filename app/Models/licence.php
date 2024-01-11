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
    public function candidatures(){
        return $this->belongsToMany(Candidature::class, 'inscription');
    }
    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id');
    }
    public function specialite(){
        return $this->belongsTo(Specialite::class,'specialite_id');
    }
    
}
