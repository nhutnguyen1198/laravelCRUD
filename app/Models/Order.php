<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Relationship with User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id');
    }
}
