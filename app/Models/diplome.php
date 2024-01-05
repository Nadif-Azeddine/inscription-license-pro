<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diplome extends Model
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
        return $this->belongsTo(candidature::class);
    }
    public function etablissement(){
        return $this->belongsTo(etablissement::class);
    }
    public function bacpd(){
        return $this->hasOne(bacpd::class);
    }
    public function bac(){
        return $this->hasOne(bac::class);
    }
}
