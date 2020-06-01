<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportantNumbers extends Model
{
    protected $table = 'important_numbers';
    protected $fillable = ['name', 'number'];
}
