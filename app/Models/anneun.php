<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anneun extends Model
{
    use HasFactory;
    protected $table = 'anneun';
    protected $fillable = [
        'anneun_id',
     
      
    ];
    public function inscription(){
        return $this->hasOne(inscription::class);
    }
    public function licence(){
        return $this->hasMany(licence::class);
    }
}
