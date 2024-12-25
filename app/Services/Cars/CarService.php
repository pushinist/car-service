<?php

namespace App\Services\Cars;

use App\Repositories\CarRepository\CarRepository;

class CarService
{
    public function __construct(protected CarRepository $carRepository)
    {
    }


    public function all()
    {
        return $this->carRepository->all();
    }

    public function create(array $data)
    {
        $this->carRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->carRepository->find($id);
    }

    public function changeClient(int $id, array $client)
    {
        $this->carRepository->changeClient($id, $client);
    }
}
