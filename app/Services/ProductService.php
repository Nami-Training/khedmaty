<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use App\Models\CarModel;

class ProductService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Product);
    }
}
