<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $guarded = false;

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
