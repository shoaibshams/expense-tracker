<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = ['date', 'category_id', 'amount', 'description'];

    protected $casts = [
        'date' => 'date',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeIncome(Builder $query): Builder
    {
        return $query->whereRelation('category', 'type', 'income');
    }

    public function scopeExpense(Builder $query): Builder
    {
        return $query->whereRelation('category', 'type', 'expense');
    }
}
