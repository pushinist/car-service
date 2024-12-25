<?php

namespace App\Services\Parts;

use App\Repositories\PartRepository\PartRepository;

class PartService
{
    public function __construct(protected PartRepository $partRepository)
    {
    }

    public function all()
    {
        return $this->partRepository->all();
    }

    public function find($id)
    {
        return $this->partRepository->find($id);
    }

    public function create(array $data)
    {
        $this->partRepository->create($data);
    }

    public function update(array $data, $id)
    {
        $this->partRepository->update($data, $id);
    }

    public function delete($id)
    {
        $this->partRepository->delete($id);
    }
}
