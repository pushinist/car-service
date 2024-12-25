<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Services\Cars\CarService;

class CarStoreController extends Controller
{
    public function __construct(protected CarService $carService)
    {
    }

    public function __invoke(StoreCarRequest $request)
    {
        $this->carService->create($request->validated());
        return redirect()->route('cars.index');
    }

}
