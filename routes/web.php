<?php

use App\Http\Controllers\Car\CarChangeClientController;
use App\Http\Controllers\Car\CarCreateController;
use App\Http\Controllers\Car\CarEditController;
use App\Http\Controllers\Car\CarIndexController;
use App\Http\Controllers\Car\CarShowController;
use App\Http\Controllers\Car\CarStoreController;
use App\Http\Controllers\Client\ClientCreateController;
use App\Http\Controllers\Client\ClientIndexController;
use App\Http\Controllers\Client\ClientShowController;
use App\Http\Controllers\Client\ClientStoreController;
use App\Http\Controllers\Mechanic\MechanicCreateController;
use App\Http\Controllers\Mechanic\MechanicIndexController;
use App\Http\Controllers\Mechanic\MechanicShowController;
use App\Http\Controllers\Mechanic\MechanicStoreController;
use App\Http\Controllers\Order\OrderCreateController;
use App\Http\Controllers\Order\OrderEditController;
use App\Http\Controllers\Order\OrderIndexController;
use App\Http\Controllers\Order\OrderShowController;
use App\Http\Controllers\Order\OrderStoreController;
use App\Http\Controllers\Order\OrderUpdateController;
use App\Http\Controllers\Part\PartCreateController;
use App\Http\Controllers\Part\PartIndexController;
use App\Http\Controllers\Part\PartShowController;
use App\Http\Controllers\Part\PartStoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\TestController::class);

Route::get('/clients', ClientIndexController::class)->name('clients.index');
Route::get('/clients/create', ClientCreateController::class);
Route::post('/clients', ClientStoreController::class)->name('clients.store');
Route::get('/clients/{client}', ClientShowController::class)->name('clients.show');
//Route::get('/clients/{client}/cars', ClientCarsController::class);
//
//
Route::get('/cars', CarIndexController::class)->name('cars.index');
Route::get('/cars/create', CarCreateController::class);
Route::post('/cars', CarStoreController::class)->name('cars.store');
Route::get('/cars/{car}', CarShowController::class)->name('cars.show');
Route::get('/cars/{car}/edit', CarEditController::class)->name('cars.edit');
Route::patch('/cars/{car}', CarChangeClientController::class)->name('cars.change_client');


Route::get('/mechanics', MechanicIndexController::class)->name('mechanics.index');
Route::get('/mechanics/create', MechanicCreateController::class)->name('mechanics.create');
Route::post('/mechanics', MechanicStoreController::class)->name('mechanics.store');
Route::get('/mechanics/{mechanic}', MechanicShowController::class)->name('mechanics.show');


Route::get('/parts', PartIndexController::class)->name('parts.index');
Route::get('/parts/create', PartCreateController::class)->name('parts.create');
Route::post('/parts', PartStoreController::class)->name('parts.store');
Route::get('/parts/{part}', PartShowController::class)->name('parts.show');

Route::get('/orders', OrderIndexController::class)->name('orders.index');
Route::get('/orders/create', OrderCreateController::class);
Route::post('/orders', OrderStoreController::class)->name('orders.store');
Route::get('/orders/{order}', OrderShowController::class)->name('orders.show');
Route::get('/orders/{order}/edit', OrderEditController::class)->name('orders.edit');
Route::patch('/orders/{order}', OrderUpdateController::class)->name('orders.update');


//Route::patch('cars', CarChangeClientController::class);
//Route::get('/cars/{car}', CarHistoryController::class);
//
//Route::get('/orders/create', OrderCreateController::class);
//Route::post('/orders', OrderStoreController::class);
//Route::put('/orders/{order}', OrderAppointMechanicController::class);
////Route::put('/orders/{') Добавление запчастей и работ
//Route::patch('/orders/{order}', OrderChangeStatusController::class);
//// История изменений
