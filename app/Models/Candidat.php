<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table = 'Candidat';
    protected $fillable = [
        'user_id',
        'ville_id',
        'etablissement_id',
        'adresse',
        'Date_naissance',
        'num_tel',
        'email',
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
}
