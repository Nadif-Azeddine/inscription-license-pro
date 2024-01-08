<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;
    protected $table = 'licence';
    protected $fillable = [
        'departement_id',
        'nom_licence',
        'order',
    
    ];
    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
