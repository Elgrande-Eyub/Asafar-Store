<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory,SoftDeletes;

    public function orderItems(): HasMany
    {
        return $this->hasMany(orderItem::class);
    }

}
