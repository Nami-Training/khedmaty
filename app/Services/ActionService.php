<?php

namespace App\Services;

use App\Models\Action;

class ActionService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Action);
    }
}
