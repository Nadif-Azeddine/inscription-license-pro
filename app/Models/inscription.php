<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscription';
    protected $fillable = [
        'licence_id',
        'candidature_id',
        'order',
        'etat',
    ];
    public function license(){
        return $this->belongsTo(Licence::class, 'licence_id');
    }
  
    public function candidature(){
        return $this->belongsTo(Candidature::class, 'candidature_id');
    }
}
