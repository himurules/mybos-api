<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    protected $fillable = ['building_id', 'name', 'unit_number', 'phone_number'];

    public function buildings() {
        return $this->belongsTo(Buildings::class, 'building_id');
    }
}
