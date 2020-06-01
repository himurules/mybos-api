<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkOrders extends Model
{
    protected $table = 'work_orders';
    protected $fillable = ['building_id', 'contractor_id', 'wo_number'];

    public function buildings() {
        return $this->belongsTo(Buildings::class, 'building_id');
    }

    public function contractors() {
        return $this->belongsTo(Contractors::class, 'contractor_id');
    }
}
