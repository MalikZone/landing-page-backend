<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testing;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        $products = Product::all();
        return response()->json([
            'status' => true,
            'message' => 'data product',
            'data' => $products
        ]);
    }
}
