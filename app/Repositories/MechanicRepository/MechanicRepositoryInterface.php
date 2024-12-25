<?php

namespace App\Repositories\MechanicRepository;

interface MechanicRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function find($id);
}
