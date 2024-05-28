<?php

namespace App\Services;

use App\Models\Image;

class ImageService extends MainService
{
    public function __construct()
    {
        parent::__construct(new Image);
    }
}
