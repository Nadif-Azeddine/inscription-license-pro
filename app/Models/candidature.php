<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidature extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidature_id',
        'candidat_id',
        'diplome_id',
        'etat',
      
    ];

    public function condiate(){
        return $this->belongsTo(Candidat::class);
    }
    public function diplome(){
        return $this->hasOne(diplome::class);
    }
    public function dossier(){
        return $this->hasOne(dossier::class);
    }
    public function inscription(){
        return $this->hasMany(inscription::class);
    }
}
