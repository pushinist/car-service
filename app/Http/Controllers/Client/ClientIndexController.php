<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Clients\ClientService;

class ClientIndexController extends Controller
{
    public function __construct(protected ClientService $clientService)
    {
    }

    public function __invoke()
    {
        $clients = $this->clientService->all();
        return view('client.index', compact('clients'));
    }
}
