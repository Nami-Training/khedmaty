<?php

namespace App\Services;

use App\Models\Offer;

class OfferService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Offer);
    }
}
