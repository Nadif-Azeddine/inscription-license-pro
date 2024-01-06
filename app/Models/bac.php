<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bac extends Model
{
    use HasFactory;
    protected $table = 'bac';
    protected $fillable = [
        'option_id',
        'Moy_national',
        'Moy_regional',
        'Moy_general',
        'Date_obt',
        'Mention',
    ];

    public function option(){
        return $this->hasOne(BacOption::class);
    }
    public function diplome(){
        return $this->belongsTo(diplome::class);
    }
}
