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
    ];
    public function candidatures(){
        return $this->belongsToMany(Candidature::class, 'inscription');
    }
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
