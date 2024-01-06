<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;
    protected $table = 'langue';
    protected $fillable = [
        'menu_id',
        'name',
        'key',
        'translation',
    ];
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
