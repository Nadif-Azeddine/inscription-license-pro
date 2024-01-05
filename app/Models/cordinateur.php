<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cordinateur extends Model
{
    use HasFactory;
    protected $table = 'cordinateur';
    protected $fillable = [
        'cordinateur_id',
        'departement_id',
        'users_id',
        'nom',
        'prenom',
        'Date_Naiss',
       
      
    ];
    public function departement(){
        return $this->belongsTo(departement::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
