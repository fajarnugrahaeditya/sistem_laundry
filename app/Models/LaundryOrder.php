<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaundryOrder extends Model
{
    protected $table = 'laundry_orders';

    const UPDATED_AT = null;

    protected $fillable = [
        'service_id',
        'customer_name',
        'phone',
        'weight_kg',
        'total_price',
        'received_date',
        'estimated_done',
        'actual_done',
        'pickup_date',
        'status',
        'notes'
    ];

    public function service()
    {
        return $this->belongsTo(LaundryService::class, 'service_id');
    }
}