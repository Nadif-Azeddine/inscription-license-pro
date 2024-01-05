<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacoption extends Model
{
    use HasFactory;
    protected $table = 'bacoption';
    protected $fillable = [
        'bacoption_id',
        'option',
        
       
      
    ];
    public function option(){
        return $this->belongsToMany(bac::class);
    }
}
