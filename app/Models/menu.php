<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = [
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function langue(){
        return $this->hasMany(Langue::class);
    }
}
