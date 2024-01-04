<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;
    protected $fillable = [
        'specialite_id',
        'libelle',
        
    ];
    public function licence(){
        return $this->hasMany(licence::class);
    }
    public function typebpd(){
        return $this->belongsToMany(typebpd::class);
    }
}
