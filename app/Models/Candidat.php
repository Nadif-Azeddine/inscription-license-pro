<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table = 'Candidat';
    protected $fillable = [
        'candidat_id',
        'user_id',
        'ville_id',
        'etablissement_id',
        'Nom',
        'Prenom',
        'Adresse',
        'Date_Naiss',
        'Num_tel',
        'Email',
        'CIN',
        'CNE',
        'Num_Apoge',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ville(){
        return $this->belongsTo(ville::class);
    }

    public function etablissement(){
        return $this->belongsTo(etablissement::class);
    }
    public function condidture(){
        return $this->hasOne(candidature::class);
    }
}
