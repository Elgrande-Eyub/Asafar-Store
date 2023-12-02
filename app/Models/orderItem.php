<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class orderItem extends Model
{
    use HasFactory,SoftDeletes;

    public function order(): BelongsTo
    {
        return $this->BelongsTo(order::class);
    }

    public function product(): BelongsTo
    {
        return $this->BelongsTo(product::class);
    }
}
