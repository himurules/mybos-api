<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = ['building_id', 'subject', 'description', 'type', 'due_date', 'priority', 'status', 'job_area', 'category', 'contractor_id', 'has_attachment'];

    public function buildings() {
        return $this->belongsTo(Buildings::class, 'building_id');
    }
}
