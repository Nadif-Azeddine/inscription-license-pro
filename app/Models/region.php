<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $fillable = [
        'region_id',
        'nom_region',
       
      
    ];
    public function villes(){
        return $this->hasMany(Ville::class);
    }
}
