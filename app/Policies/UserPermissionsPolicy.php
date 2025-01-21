<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPermissionsPolicy
{
    use HandlesAuthorization;

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id || $currentUser->role === 'admin' || ($currentUser->role === 'staff' && $user->role === 'guest');
    }

    public function delete(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id || $currentUser->role === 'admin' || ($currentUser->role === 'staff' && $user->role === 'guest');
    }
}
