<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;

class CarShowController extends Controller
{
    public function __construct(protected CarService $carService)
    {
    }

    public function __invoke($id)
    {
        $car = $this->carService->find($id);
        return view('car.show', compact('car'));
    }
}
