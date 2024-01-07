<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBpd extends Model
{
    use HasFactory;
    protected $table = 'typebpd';
    protected $fillable = [
        'typebpd_id',
        'specialite_id',
        'libelle',   
    ];

    public function bacpd(){
        return $this->belongsToMany(BacPd::class);
    }
    public function specialite(){
        return $this->hasOne(Specialite::class);
    }
}
