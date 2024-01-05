<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typebpd extends Model
{
    use HasFactory;
    protected $table = 'typebpd';
    protected $fillable = [
        'typebpd_id',
        'specialite_id',
        'libelle',   
    ];

    public function bacpd(){
        return $this->belongsToMany(bacpd::class);
    }
    public function specialite(){
        return $this->hasOne(specialite::class);
    }
}
