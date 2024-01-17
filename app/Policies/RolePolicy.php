<?php

namespace App\Policies;

use App\Models\User;

class RolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('readRole');
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('createRole');
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->hasPermissionTo('updateRole');
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('deleteRole');
        
    }
}
