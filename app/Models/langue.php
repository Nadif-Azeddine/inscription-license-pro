<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langue extends Model
{
    use HasFactory;
    protected $fillable = [
        'langue_id',
        'menu_id',
        'name',
        'key',
        'translation',
    ];
    public function menu(){
        return $this->belongsTo(menu::class);
    }
}
