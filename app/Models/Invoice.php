<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'discount',
        'vat',
        'payble',
        'cus_details',
        'ship_details',
        'shipping_method',
        'tran_id',
        'payment_status',
        'delevary_status',
        'user_id'

    ];
}
