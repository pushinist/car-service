<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Clients\ClientService;

class ClientShowController extends Controller
{
    public function __construct(protected ClientService $clientService)
    {
    }

    public function __invoke($id)
    {
        $client = $this->clientService->find($id);
        return view('client.show', compact('client'));
    }
}
