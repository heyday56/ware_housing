<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table = 'sales';
    public function customer()
    {
        return $this->belongsTo(customer::class, 'customer_id', 'id');
    }

}
