<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneUn extends Model
{
    use HasFactory;
    protected $table = 'anneun';
    protected $fillable = [
        "annee_universitaire"
    ];
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
    public function licences()
    {
        return $this->hasMany(Licence::class);
    }
}
