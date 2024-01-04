<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bac extends Model
{
    use HasFactory;
    protected $fillable = [
        'bac_id',
        'option_id',
        'Moy_national',
        'Moy_regional',
        'Moy_general',
        'Date_obt',
        'Mention',
    ];

    public function option(){
        return $this->hasOne(bacoption::class);
    }
    public function diplome(){
        return $this->belongsTo(diplome::class);
    }
}
