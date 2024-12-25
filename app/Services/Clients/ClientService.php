<?php

namespace App\Services\Clients;

use App\Repositories\ClientRepository\ClientRepository;

class ClientService
{
    public function __construct(private ClientRepository $clientRepository)
    {
    }

    public function all()
    {
        return $this->clientRepository->all();
    }

    public function create(array $data)
    {
        $this->clientRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->clientRepository->find($id);
    }
}
