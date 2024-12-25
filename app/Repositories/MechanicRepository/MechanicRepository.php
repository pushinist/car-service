<?php

namespace App\Repositories\MechanicRepository;

use App\Models\Mechanic;
use App\Repositories\MechanicRepository\MechanicRepositoryInterface;

class MechanicRepository implements MechanicRepositoryInterface
{
    public function all()
    {
        return Mechanic::all();
    }

    public function create(array $data)
    {
        Mechanic::create($data);
    }

    public function find($id)
    {
        return Mechanic::findOrFail($id);
    }

    public function addOrder($id)
    {
        $mechanic = $this->find($id);
        $mechanic->amount_of_orders++;
        $mechanic->save();
    }

    public function removeOrder($id)
    {
        $mechanic = $this->find($id);
        $mechanic->amount_of_orders--;
        $mechanic->save();
    }
}
