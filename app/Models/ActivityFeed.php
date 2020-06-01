<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ActivityFeed extends Model
{
    protected $table = 'activity_feed';

    protected $fillable = ['building_id', 'user_id', 'feed'];

    public function buildings() {
        return $this->belongsTo(Buildings::class, 'building_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
