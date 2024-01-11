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
        'anneeun',
        'etat',
    ];

    

    public function candidat(){
        return $this->belongsTo(Candidat::class, 'candidat_id');
    }

    public function dossier(){
        return $this->hasOne(Dossier::class, 'candidature_id');
    }
    public function licenses(){
        return $this->belongsToMany(Licence::class, 'inscription');
    }

    public function anneeun(){
        return $this->belongsTo(AnneUn::class, 'anneeun');
    }
}
