<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Console\View\Components\Task;

class TaskPolicy
{
    public function create(User $user): bool
    {
        return $user->role_id == 2;
    }

    public function update(User $user, Task $task): bool
    {
        return in_array($user->role_id, [2, 3])
            || $task->user_id === $user->id;
    }

    public function delete(User $user, Task $task): bool
    {
        return $user->role_id == 2;
    }
}
