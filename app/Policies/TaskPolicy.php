<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\View\Components\Task;

class TaskPolicy
{
    public function create(User $user): bool
    {
        return $user->roles->contains(Role::ROLE_ADMIN);
    }

    public function update(User $user, Task $task): bool
    {
        return $user->roles->contains(Role::ROLE_ADMIN) || $user->roles->contains(Role::ROLE_MANAGER) ||
            $task->user_id === $user->id;
    }

    public function delete(User $user, Task $task): bool
    {
        return $user->roles->contains(Role::ROLE_ADMIN);
    }
}
