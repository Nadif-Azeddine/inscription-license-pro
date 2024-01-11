<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $table = 'specialite';
    protected $fillable = [
        'libelle',
        
    ];
    public function licences(){
        return $this->hasMany(Licence::class, 'specialite_id');
    }
    public function bacpds(){
        return $this->hasMany(BacPd::class, 'specialite_id');
    }
}
