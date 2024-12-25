<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\CarChangeClientRequest;
use App\Services\Cars\CarService;

class CarChangeClientController extends Controller
{
    public function __construct(protected CarService $carService)
    {
    }

    public function __invoke(CarChangeClientRequest $request, $id)
    {
        $this->carService->changeClient($id, $request->validated());
        return redirect()->route('cars.index');
    }

}
