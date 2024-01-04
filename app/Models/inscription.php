<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'inscription_id',
        'licence_id',
        'anneun_id',
        'candidature_id',
    ];
    public function licence_id(){
        return $this->belongsTo(licence::class);
    }
    public function anneun(){
        return $this->belongsTo(anneun::class);
    }
    public function candidature(){
        return $this->belongsTo(candidature::class);
    }
}
