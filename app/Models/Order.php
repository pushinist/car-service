<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Order extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;

    protected $auditInclude = [
        'status',
        'cost',
        'work_to_do'
    ];
    protected $guarded = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }

    public function parts()
    {
        return $this->belongsToMany(Part::class);
    }

    use SoftDeletes;
}
