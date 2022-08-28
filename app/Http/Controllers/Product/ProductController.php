<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __invoke()
    {
        return Product::all();
    }
}
