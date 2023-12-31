<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory,SoftDeletes;

    public function category(): BelongsTo
    {
        return $this->BelongsTo(category::class);
    }

    public function orderItems(): HasMany
    {
        return $this->HasMany(orderItem::class);
    }

    protected $casts = [
        'attachments' => 'array',
    ];
}
