<?php

namespace App\Services;

use App\Models\Rate;

class RateService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Rate);
    }
}
