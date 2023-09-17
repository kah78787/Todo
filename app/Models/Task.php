<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['task','done','user_id'];

    public function scopeWhereDone(Builder $query): void
    {
        $query->where('done',1);
    }

    public function scopeWhereUndone(Builder $query): void
    {
        $query->where('done',0);
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function isNotDone(): bool
    {
        return !$this->done;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
