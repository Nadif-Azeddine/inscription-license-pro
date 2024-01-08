<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacOption extends Model
{
    use HasFactory;
    protected $table = 'bacoption';
    protected $fillable = [
        'option', 
    ];
    public function option(){
        return $this->hasMany(Bac::class, 'option_id');
    }
}
