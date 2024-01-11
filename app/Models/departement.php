<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $table = 'departement';
    protected $fillable = [
        'departement_id',
        'etablissement_id',
        'departement_nom',
       
      
    ];
    public function cordinateur(){
        return $this->hasMany(cordinateur::class, "departement_id");
    }
    public function etablissement(){
        return $this->belongsTo(etablissement::class);
    }
    public function licence(){
        return $this->hasMany(Licence::class);
    }
}
