<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bac extends Model
{
    use HasFactory;
    protected $table = 'bac';
    protected $fillable = [
        'candidat_id',
        'option_id',
        'moy_general',
        'date_obt',
        'mention',
    ];

    public function option(){
        return $this->belongsTo(BacOption::class, 'option_id');
    }
    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
