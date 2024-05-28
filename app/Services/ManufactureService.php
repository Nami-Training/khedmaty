<?php

namespace App\Services;

use App\Models\Manufacture;

class ManufactureService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Manufacture);
    }
}
