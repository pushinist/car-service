<?php

namespace App\Repositories\CarRepository;

interface CarRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function changeClient(int $id, array $client);

}
