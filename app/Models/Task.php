<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Task extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    protected static function booted(): void
    {
        self::addGlobalScope(function (Builder $query) {
            if (auth()->check() && !auth()->user()->is_admin) {
                $query->where('user_id', auth()->id());
            }
        });
    }
}
