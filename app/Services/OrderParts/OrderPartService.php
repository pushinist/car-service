<?php

namespace App\Services\OrderParts;

use App\Repositories\OrderPartRepository\OrderPartRepository;

class OrderPartService
{
    public function __construct(protected OrderPartRepository $orderPartRepository)
    {
    }


}
