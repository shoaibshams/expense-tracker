<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    protected $fillable = ['name', 'code', 'opening_balance', 'description'];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
