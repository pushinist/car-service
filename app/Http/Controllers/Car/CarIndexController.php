<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarService;

class CarIndexController extends Controller
{
    public function __construct(protected CarService $carService)
    {
    }

    public function __invoke()
    {
        $cars = $this->carService->all();
        return view('car.index', compact('cars'));
    }
}
