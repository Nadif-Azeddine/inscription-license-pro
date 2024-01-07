<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table = 'candidature';
    protected $fillable = [
        'candidat_id',
        'bac_id',
        'bacpd_id',
        'etat',
      
    ];

    public function candidat(){
        return $this->belongsTo(Candidat::class, 'candidat_id');
    }
    public function diplome(){
        return $this->hasOne(diplome::class, 'diplome_id');
    }
    public function dossier(){
        return $this->hasOne(Dossier::class);
    }
    public function inscription(){
        return $this->hasMany(Inscription::class);
    }
}
