<?php

namespace App\Services;

use App\Models\Permission;

class PermissionService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Permission);
    }
}
