<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacPd extends Model
{
    use HasFactory;
    protected $table = 'bacpd';
    protected $fillable = [
        'candidat_id',
        'diplome_id',
        'specialite_id',
        'moy_pa',
        'moy_da',
        'date_obt',
        'nb_etudiant_pa',
        'classment_pa',
        'nb_etudiant_da',
        'classment_da',
        'date_reussite_pa',
        'date_reussite_da',
        'mention',      
    ];
    public function specialite(){
        return $this->belongsTo(Specialite::class, 'specialite_id');
    }
    public function diplome(){
        return $this->belongsTo(diplome::class, 'diplome_id');
    }
    public function candidat(){
        return $this->belongsTo(Candidat::class, 'candidat_id');
    }

}
