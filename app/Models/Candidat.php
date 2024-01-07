<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table = 'candidat';
    protected $fillable = [
        'user_id',
        'ville_id',
        'etablissement_id',
        'adresse',
        'CIN',
        'CNE',
        'num_apoge',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ville(){
        return $this->belongsTo(Ville::class, "ville_id");
    }

    public function etablissement(){
        return $this->belongsTo(Etablissement::class, "etablissement_id");
    }
    public function candidature(){
        return $this->hasOne(Candidature::class);
    }

    public function bac(){
        return $this->hasOne(Bac::class);
    }

    public function bacpd(){
        return $this->hasOne(BacPd::class);
    }
}
