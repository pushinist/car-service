<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\StoreClientRequest;
use App\Services\Clients\ClientService;

class ClientStoreController extends Controller
{
    public function __construct(protected ClientService $clientService)
    {
    }

    public function __invoke(StoreClientRequest $request)
    {
        $this->clientService->create($request->validated());
        return redirect()->route('clients.index');
    }

}
