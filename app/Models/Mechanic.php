<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $guarded = false;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
