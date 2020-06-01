<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['building_id', 'user_id', 'note'];

    public function buildings() {
        return $this->belongsTo(Buildings::class, 'building_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
