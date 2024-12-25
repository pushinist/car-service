<?php

namespace App\Services\Mechanics;

use App\Repositories\MechanicRepository\MechanicRepository;

class MechanicService
{
    public function __construct(protected MechanicRepository $mechanicRepository)
    {
    }

    public function all()
    {
        return $this->mechanicRepository->all();
    }

    public function find(int $id)
    {
        return $this->mechanicRepository->find($id);
    }

    public function create(array $data)
    {
        $this->mechanicRepository->create($data);
    }
}
