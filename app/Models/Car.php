<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
