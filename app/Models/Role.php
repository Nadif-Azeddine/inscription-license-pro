<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];

    public function scopeSearch($query, $search)
    {
        return $query->where('nom', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles');
    }


}
