<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'addresses';

    protected $fillable = [
        'user_id',
        'street_address',
        'city',
        'state',
        'postal_code',
        'country',
        'address_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
