<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licence extends Model
{
    use HasFactory;
    protected $table = 'licence';
    protected $fillable = [
        'licence_id',
        'departement_id',
        'specialite_id',
        'nom_licence',
        'anneun_id',
        'order',
    
    ];
    public function inscription(){
        return $this->hasMany(inscription::class);
    }
    public function departement(){
        return $this->belongsTo(departement::class);
    }
    public function specialite(){
        return $this->hasOne(specialite::class);
    }
    public function anneun(){
        return $this->belongsTo(anneun::class);
    }
}
