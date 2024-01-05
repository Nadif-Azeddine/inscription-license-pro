<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $fillable = [
        'region_id',
        'nom_region',
       
      
    ];
    public function ville(){
        return $this->hasMany(ville::class);
    }
}
