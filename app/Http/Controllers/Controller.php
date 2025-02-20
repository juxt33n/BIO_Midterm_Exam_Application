<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        // Example product array (you can change the content based on your theme)
        $products = [
            ['name' => 'Smartphone', 'price' => 699],
            ['name' => 'Laptop', 'price' => 999],
            ['name' => 'Smartwatch', 'price' => 199]
        ];

        // Pass products array to the view
        return view('products', ['products' => $products]);
    }
}
