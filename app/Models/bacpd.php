<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacpd extends Model
{
    use HasFactory;
    protected $table = 'bacpd';
    protected $fillable = [
        'bacpd_id',
        'typebpd_id',
        'Moy_s1',
        'Moy_s2',
        'Moy_s3',
        'Date_obt',
        'Mention',      
    ];
    public function typebpd(){
        return $this->hasOne(typebpd::class);
    }
    public function diplome(){
        return $this->belongsTo(diplome::class);
    }
}
