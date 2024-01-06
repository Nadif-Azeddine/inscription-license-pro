<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $table = 'diplome';
    protected $fillable = [
        'diplome_id',
        'etablissement_id',
        'bacpd_id',
        'bac_id',
        'nom_diplome',
    ];
    public function candidature(){
        return $this->belongsTo(Candidature::class);
    }
    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }
    public function bacpd(){
        return $this->hasOne(BacPd::class);
    }
    public function bac(){
        return $this->hasOne(BacPd::class);
    }
}
