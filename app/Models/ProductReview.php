<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    protected $fillable = [
        'descreption',
        'rateing',
        'customer_id',
        'product_id'
    ];
    public function profile():BelongsTo{
        return $this->belongsTo(CustomerProfile::class);
    }
}
