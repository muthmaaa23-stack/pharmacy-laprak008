<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medicine extends Model
{
    protected $fillable = ['name', 'price', 'stock', 'supplier_id'];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}