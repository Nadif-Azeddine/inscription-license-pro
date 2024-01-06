<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscription';
    protected $fillable = [
        'inscription_id',
        'licence_id',
        'anneun_id',
        'candidature_id',
    ];
    public function licence_id(){
        return $this->belongsTo(Licence::class);
    }
    public function anneun(){
        return $this->belongsTo(Anneun::class);
    }
    public function candidature(){
        return $this->belongsTo(Candidature::class);
    }
}
