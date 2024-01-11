<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['nom','description'];

    public function scopeSearch($query, $search)
    {
        return $query->where('nom', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_roles');
    }

}
