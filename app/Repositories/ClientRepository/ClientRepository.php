<?php

namespace App\Repositories\ClientRepository;

use App\Models\Client;

class ClientRepository
{
    public function all()
    {
        return Client::all();
    }

    public function create(array $data)
    {
        Client::create($data);
    }

    public function update(array $data, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($data);
    }

    public function delete($id)
    {
        Client::destroy($id);
    }

    public function find($id)
    {
        return Client::findOrFail($id);
    }
}
