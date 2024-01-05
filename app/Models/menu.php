<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = [
        'menu_id',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function langue(){
        return $this->hasMany(langue::class);
    }
}
