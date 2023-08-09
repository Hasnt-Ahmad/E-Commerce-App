<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderItem extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class);
    }
    
    public function product() {
        return $this->belongsTo(Product::class);
    }
}