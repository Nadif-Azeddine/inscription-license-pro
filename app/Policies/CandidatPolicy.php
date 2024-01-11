<?php

namespace App\Policies;

use App\Models\User;

class CandidatPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('ReadRole');
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('CreateRole');
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->hasPermissionTo('UpdateRole');
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('DeleteRole');
        
    }
}
