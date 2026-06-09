<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaundryService extends Model
{
    protected $table = 'laundry_services';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price_per_kg',
        'min_weight_kg',
        'processing_days',
        'includes',
        'is_active'
    ];

    public function orders()
    {
        return $this->hasMany(LaundryOrder::class, 'service_id');
    }
}