<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cordinateur extends Model
{
    use HasFactory;
    protected $table = 'cordinateur';
    protected $fillable = [
        'departement_id',
        'user_id',
        'nom',
        'prenom',
        'Date_Naiss',
       
      
    ];
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
