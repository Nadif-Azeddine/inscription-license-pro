<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $table = 'specialite';
    protected $fillable = [
        'specialite_id',
        'libelle',
        
    ];
    public function licence(){
        return $this->hasMany(Licence::class);
    }
    public function typebpd(){
        return $this->belongsToMany(TypeBpd::class);
    }
}
