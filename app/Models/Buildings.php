<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    protected $fillable = ['name', 'address', 'state', 'suburb', 'pr_status', 'pc_status', 'logo', 'photo', 'plan', 'wCode', 'country'];

    public function activityFeed() {
        return $this->hasMany(ActivityFeed::class,'building_id');
    }

    public function cases() {
        return $this->hasMany(Cases::class,'building_id');
    }

    public function notes() {
        return $this->hasMany(Notes::class,'building_id');
    }

    public function residents() {
        return $this->hasMany(Residents::class,'building_id');
    }

    public function workOrders() {
        return $this->hasMany(WorkOrders::class,'building_id');
    }
}
