<?php

namespace App\Repositories\CarRepository;

use App\Models\Car;

class CarRepository implements CarRepositoryInterface
{
    public function all()
    {
        return Car::all();
    }

    public function create(array $data)
    {
        Car::create($data);
    }

    public function update(array $data, $id)
    {
        $car = $this->find($id);
        $car->update($data);
    }

    public function find($id)
    {
        return Car::findOrFail($id);
    }

    public function delete($id)
    {
        Car::destroy($id);
    }

    public function changeClient(int $id, array $client)
    {
        $car = $this->find($id);
        $car->client_id = $client['client_id'];
        $car->save();
    }
}
