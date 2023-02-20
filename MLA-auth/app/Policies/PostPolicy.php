<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if ($user->role_id === Role::IS_ADMIN) {
            return true;
        }
    }

    public function viewAny(User $user)
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role_id === Role::IS_WRITTER;
    }

    public function update(User $user, Post $post): bool
    {
        return $user->role_id === Role::IS_WRITTER && $user->id === $post->user_id;
    }

    public function delete(User $user, Post $post): bool
    {
        return $user->role_id === Role::IS_WRITTER && $user->id === $post->user_id;
    }
}
