<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;

class TestController extends Controller
{
    public function __invoke()
    {
        return ProductCollection::make(Product::get());
    }
}
