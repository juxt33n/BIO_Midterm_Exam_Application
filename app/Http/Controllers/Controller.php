<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = [
            ['name' => 'Xiaomi Smartphone', 'price' => 60000],
            ['name' => 'Gaming Laptop', 'price' => 40000],
            ['name' => 'Smartwatch', 'price' => 25000]
        ];

        return view('products', ['products' => $products]);
    }
}
