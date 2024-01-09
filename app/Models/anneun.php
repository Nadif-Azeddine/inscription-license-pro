<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneUn extends Model
{
    use HasFactory;
    protected $table = 'annee_univ';
    protected $primaryKey = 'anneeun';
    public $timestamps = false;
    protected $fillable = [
        "anneeun"
    ];
    public function candidatures()
    {
        return $this->hasMany(Candidature::class, 'anneeun');
    }
}
